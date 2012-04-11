<?php
namespace KVS\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class UserMetaType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('address', 'text');
        $builder->add('mobile', 'text');
        $builder ->add('company', 'text');
        $builder->add('position', 'text');
    }

    public function getName()
	{
        return 'usermeta';
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'KVS\UserBundle\Document\UserMeta',
        );
    }
}
