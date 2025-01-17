<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;

class SettingsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('firebasekey',"text",array());
        $builder->add('privacypolicy', CKEditorType::class, 
            array(
                'config_name' => 'user_config'
            )
        );
        $builder->add('save', 'submit',array("label"=>"SAVE"));

    }
    public function getName()
    {
        return 'Settings';
    }
}
?>