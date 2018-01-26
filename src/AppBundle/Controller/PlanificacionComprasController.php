<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Cargo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Cargo controller.
 *
 * @Route("proyecto/{idProyecto}/")
 */
class PlanificacionComprasController extends Controller
{
    /**
     * Lists all planificacion.
     *
     * @Route("planificacion", name="planificacion_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $idProyecto = $request->get('idProyecto');

        $proyecto = $em->getRepository('AppBundle:Proyecto')->find($idProyecto);

        $materiales = $em->createQueryBuilder()
                        ->select('m')
                        ->from('AppBundle:Material','m')
                        ->innerJoin('AppBundle:CategoriaMaterial','cm','with','m.categoriaMaterial = cm.id')
                        ->getQuery()
                        ->getArrayResult();

        $categorias = $em->getRepository('AppBundle:CategoriaMaterial')->findAll();
       
        // Obtencion de mese del proyecto
        $meses = $proyecto->getFechaInicio()->diff($proyecto->getFechaFin());
        $meses = ( $meses->y * 12 ) + $meses->m;

        $mesActual = (int) $proyecto->getFechaInicio()->format('m');
        $anioActual = (int) $proyecto->getFechaInicio()->format('Y');

        for ($i=1; $i <= $meses; $i++) {
            if($mesActual > 12){
                $mesActual = 1;
                $anioActual++;
            }
            $mesesArray[] = $mesActual.'_'.$anioActual;
            $mesesLiteral[] = $this->mesLiteral($mesActual);
            $mesActual++;
        }

        $meses = $mesesArray;

        //$meses = array(1,2,3,4,5,6,7,8,9,10,11,12);

        $array = array();
        for ($i=0; $i < count($materiales); $i++) {
            $array[$materiales[$i]['id']]['material'] = $materiales[$i]['nombreMaterial'];
            for ($j=0; $j < count($meses); $j++) { 
                $array[$materiales[$i]['id']][$meses[$j]] = rand(10,100);
            }
        }

        //dump($array);die;

        return $this->render('planificacionCompras/index.html.twig', array(
            'proyecto' => $proyecto,
            'materiales' => $materiales,
            'meses' => $meses,
            'mesesLiteral' => $mesesLiteral,
            'matriz' => $array
        ));
    }

    public function mesLiteral($mes){
        switch ($mes) {
            case 1: $literal = 'Enero'; break;
            case 2: $literal = 'Febrero'; break;
            case 3: $literal = 'Marzo'; break;
            case 4: $literal = 'Abril'; break;
            case 5: $literal = 'Mayo'; break;
            case 6: $literal = 'Junio'; break;
            case 7: $literal = 'Julio'; break;
            case 8: $literal = 'Agosto'; break;
            case 9: $literal = 'Septiembre'; break;
            case 10: $literal = 'Octubre'; break;
            case 11: $literal = 'Noviembre'; break;
            case 12: $literal = 'Diciembre'; break;
            
            default:
                $literal = '';
                break;
        }

        return $literal;
    }
}