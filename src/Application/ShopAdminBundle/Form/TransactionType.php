<?php

namespace Application\ShopAdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TransactionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('company')
            ->add('email')
            ->add('billing_firstname')
            ->add('billing_lastname')
            ->add('billing_phone')
            ->add('billing_fax')
            ->add('billing_address')
            ->add('billing_address2')
            ->add('billing_city')
            ->add('billing_country')
            ->add('billing_zipcode')
            ->add('shipping_firstname')
            ->add('shipping_lastname')
            ->add('shipping_phone')
            ->add('shipping_fax')    
            ->add('shipping_address')
            ->add('shipping_address2')
            ->add('shipping_city')
            ->add('shipping_country')
            ->add('shipping_zipcode')
            ->add('quantity')
            //->add('payment_method')
            ->add('payment_method', 'choice', array(
                'choices' => array(
                    'bank-transfer' => 'Bank transfer', 
                    'payu' => 'PayU', 
                    'paypal' => 'PayPal', 
                    'cash-delivery' => 'Cash on delivery'
                ),
                'expanded' => true
            ))
            ->add('shipping_cost')
            //->add('shipping_method')
            ->add('shipping_method', 'choice', array(
                'choices' => array('post' => 'Post', 'dhl' => 'DHL', 'reception-pack' => 'Reception pack'),
                'expanded' => true
            ))
            ->add('status')
            ->add('created_at', 'date', array(
            	'widget' => 'single_text',
            	'attr' => array('placeholder' => 'YYYY-MM-DD'),
            ))
            ->add('user')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Application\ShopAdminBundle\Entity\Transaction'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'application_shopadminbundle_transaction';
    }
}
