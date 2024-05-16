<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Voyage extends \App\Entity\Voyage implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'categorie' => [parent::class, 'categorie', null],
        "\0".parent::class."\0".'contact' => [parent::class, 'contact', null],
        "\0".parent::class."\0".'dateDepart_voyage' => [parent::class, 'dateDepart_voyage', null],
        "\0".parent::class."\0".'dateRetour_voyage' => [parent::class, 'dateRetour_voyage', null],
        "\0".parent::class."\0".'description_voyage' => [parent::class, 'description_voyage', null],
        "\0".parent::class."\0".'destination' => [parent::class, 'destination', null],
        "\0".parent::class."\0".'duree_voyage' => [parent::class, 'duree_voyage', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'nom_voyage' => [parent::class, 'nom_voyage', null],
        "\0".parent::class."\0".'photo_voyage' => [parent::class, 'photo_voyage', null],
        "\0".parent::class."\0".'prix_voyage' => [parent::class, 'prix_voyage', null],
        "\0".parent::class."\0".'user' => [parent::class, 'user', null],
        "\0".parent::class."\0".'visibility_voyage' => [parent::class, 'visibility_voyage', null],
        'categorie' => [parent::class, 'categorie', null],
        'contact' => [parent::class, 'contact', null],
        'dateDepart_voyage' => [parent::class, 'dateDepart_voyage', null],
        'dateRetour_voyage' => [parent::class, 'dateRetour_voyage', null],
        'description_voyage' => [parent::class, 'description_voyage', null],
        'destination' => [parent::class, 'destination', null],
        'duree_voyage' => [parent::class, 'duree_voyage', null],
        'id' => [parent::class, 'id', null],
        'nom_voyage' => [parent::class, 'nom_voyage', null],
        'photo_voyage' => [parent::class, 'photo_voyage', null],
        'prix_voyage' => [parent::class, 'prix_voyage', null],
        'user' => [parent::class, 'user', null],
        'visibility_voyage' => [parent::class, 'visibility_voyage', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
