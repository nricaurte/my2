<?php

namespace Acme\helloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use  Acme\helloBundle\Entity\Alumnos;
use  Acme\helloBundle\Entity\Materia;

class DefaultController extends Controller
{

      /*  var $array1 = array(
        array('matricula' =>  1 ,'nombre' => 'fernnado'),
        array('matricula' =>  2 ,'nombre' => 'Nestor')
        );*/

       public function indexAction($name)
    {
        return $this->render('AcmehelloBundle:Default:index.html.twig', array('name' => $name));
    }
  
      public function alumnosAction()
    {
      //Se llama la clase que se creo par al abase
     $em = $this->getDoctrine()->getManager();
     $alumnos = $em->getRepository('AcmehelloBundle:Alumnos')->findAllOrderedByName();
     
        return $this->render('AcmehelloBundle:Default:alumnos.html.twig',array('array1' => $alumnos));
    }
      public  function  alumnoAction($id){
       $repository = $this->getDoctrine()->getRepository("AcmehelloBundle:Alumnos");
       //Coje todos y los guarda
       $alumno =$repository->find($id);
        return $this->render('AcmehelloBundle:Default:alumno.html.twig',array('alumno' => $alumno));
   }
     public  function  nuevoAction(){
      //insertar 
      $materia = new  Materia();
     // $materia->setName('Matematicas');
      $alumno = new Alumnos();
      $materia->addAlumno($alumno);
      $alumno->setNombre("hola");
      $alumno->setEdad(12);
      $alumno->setEmail("hola@hola");
      $alumno ->setMateria(1);

      $em=$this->getDoctrine()->getManager();

      $em->persist($materia);
      $em->persist($alumno);
 
      $em->flush();
      return $this->redirect($this->generateUrl('acmehello_alumnos'));
        //return $this->render('AcmehelloBundle:Default:alumno.html.twig',array('array1' => $this->array1[$matricula-1]));
   }
}
