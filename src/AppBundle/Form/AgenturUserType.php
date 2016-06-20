<?php
	// src/AppBundle/Form/AgenturUserType.php
		
	namespace AppBundle\Form;
	
	use Symfony\Component\Form\AbstractType;
	use Symfony\Component\Form\FormBuilderInterface;
	use Symfony\Component\OptionsResolver\OptionsResolver;
	
	class AgenturUserType extends AbstractType
	{
	    public function buildForm(FormBuilderInterface $builder, array $options)
	    {
		    	    
	        $builder->add('username', 'text',  array('label' => 'Benutzername'))
	        		->add('auVorname', 'text',  array('label' => 'Vorname'))
					->add('auNachname', 'text', array('label' => 'Nachname'))
					->add('auPw', 'repeated', array(
						'type' => 'password', 
						'first_name' => 'password', 
						'first_options' => array('label' => 'Passwort'),
						'second_name' => 'repeat_password', 
						'second_options' => array('label' => 'Passwort wiederholung'),
						'required' => false,
						'label' => 'Passwort'))
					->add('isactive', 'choice', array('choices' => array('1' => 'aktiv', '0' => 'inaktiv'), 'label' => 'Status'))
					->add('auEmail', 'email', array('label' => 'Email'))
					->add('save', 'submit', array('attr' => array('class' => 'btn btn-primary')));
	    }
	
	    public function configureOptions(OptionsResolver $resolver)
	    {
	        $resolver->setDefaults(array(
	            'data_class' => 'AppBundle\Entity\AgenturUser',
	        ));
	    }

	    public function getName()
	    {
	        return 'agenturuser';
	    }
	}