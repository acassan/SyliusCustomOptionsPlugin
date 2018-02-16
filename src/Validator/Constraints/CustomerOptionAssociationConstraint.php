<?php
declare(strict_types=1);

namespace Brille24\CustomerOptionsPlugin\Validator\Constraints;


use Symfony\Component\Validator\Constraint;

class CustomerOptionAssociationConstraint extends Constraint
{
    /**
     * @var string
     */
    public $message = 'sylius.ui.code';

    /** {@inheritdoc} */
    public function getTargets(): string
    {
        return self::PROPERTY_CONSTRAINT;
    }

    /** {@inheritdoc} */
    public function validatedBy(): string
    {
        return CustomerOptionAssociationConstraintValidator::class;
    }
}