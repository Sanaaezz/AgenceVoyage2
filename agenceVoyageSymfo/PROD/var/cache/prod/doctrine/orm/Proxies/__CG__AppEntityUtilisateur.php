<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Utilisateur extends \App\Entity\Utilisateur implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'contacts' => [parent::class, 'contacts', null],
        "\0".parent::class."\0".'email' => [parent::class, 'email', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'isVerified' => [parent::class, 'isVerified', null],
        "\0".parent::class."\0".'nom_utilisateur' => [parent::class, 'nom_utilisateur', null],
        "\0".parent::class."\0".'password' => [parent::class, 'password', null],
        "\0".parent::class."\0".'prenom_utilisateur' => [parent::class, 'prenom_utilisateur', null],
        "\0".parent::class."\0".'roles' => [parent::class, 'roles', null],
        "\0".parent::class."\0".'telephone_utilisateur' => [parent::class, 'telephone_utilisateur', null],
        "\0".parent::class."\0".'voyages' => [parent::class, 'voyages', null],
        'contacts' => [parent::class, 'contacts', null],
        'email' => [parent::class, 'email', null],
        'id' => [parent::class, 'id', null],
        'isVerified' => [parent::class, 'isVerified', null],
        'nom_utilisateur' => [parent::class, 'nom_utilisateur', null],
        'password' => [parent::class, 'password', null],
        'prenom_utilisateur' => [parent::class, 'prenom_utilisateur', null],
        'roles' => [parent::class, 'roles', null],
        'telephone_utilisateur' => [parent::class, 'telephone_utilisateur', null],
        'voyages' => [parent::class, 'voyages', null],
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
