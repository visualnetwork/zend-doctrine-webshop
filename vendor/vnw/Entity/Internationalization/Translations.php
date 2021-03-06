<?php

namespace vnw\Entity\Internationalization;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Translations extends \vnw\Entity\AbstractObject\AbstractObject
{
    /**
     * @ORM\Column(type="text", length=50, nullable=true)
     */
    private $Name;
}