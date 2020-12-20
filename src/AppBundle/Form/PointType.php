<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
class PointType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('earning',ChoiceType::class, array(
                "label"=>"Banner Ad Type",
                'choices' => array(
                    "FALSE" => "Disable Earning System",
                    "TRUE" => "Enabled Earning system"
                )));
        $builder->add('currency',"text",array());
        $builder->add('adduser');
        $builder->add('registeruser');
        $builder->add('shareyoutube');
        $builder->add('viewyoutube');
        $builder->add('addyoutube');
        $builder->add('authoryoutube');

        $builder->add('sharevideo');
        $builder->add('viewvideo');
        $builder->add('addvideo');
        $builder->add('authorvideo');
        $builder->add('shareimage');
        $builder->add('viewimage');
        $builder->add('addimage');
        $builder->add('authorimage');
        $builder->add('sharegif');
        $builder->add('viewgif');
        $builder->add('addgif');
        $builder->add('authorgif');
        $builder->add('sharequote');
        $builder->add('viewquote');
        $builder->add('addquote');
        $builder->add('authorquote');
        $builder->add('minpoints');
        $builder->add('oneusdtopoints');
        $builder->add('save', 'submit',array("label"=>"SAVE"));

    }
    public function getName()
    {
        return 'Point';
    }
}
?>