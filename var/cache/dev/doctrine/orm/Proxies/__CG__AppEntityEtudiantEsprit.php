<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class EtudiantEsprit extends \App\Entity\EtudiantEsprit implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\EtudiantEsprit' . "\0" . 'id', '' . "\0" . 'App\\Entity\\EtudiantEsprit' . "\0" . 'email', '' . "\0" . 'App\\Entity\\EtudiantEsprit' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\EtudiantEsprit' . "\0" . 'password', '' . "\0" . 'App\\Entity\\EtudiantEsprit' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\EtudiantEsprit' . "\0" . 'prenom', '' . "\0" . 'App\\Entity\\EtudiantEsprit' . "\0" . 'idEtudiant', '' . "\0" . 'App\\Entity\\EtudiantEsprit' . "\0" . 'cin', '' . "\0" . 'App\\Entity\\EtudiantEsprit' . "\0" . 'date_naissance', '' . "\0" . 'App\\Entity\\EtudiantEsprit' . "\0" . 'moyenne1', '' . "\0" . 'App\\Entity\\EtudiantEsprit' . "\0" . 'moyenne2', '' . "\0" . 'App\\Entity\\EtudiantEsprit' . "\0" . 'moyenne3', '' . "\0" . 'App\\Entity\\EtudiantEsprit' . "\0" . 'niveauFR', '' . "\0" . 'App\\Entity\\EtudiantEsprit' . "\0" . 'niveauAn'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\EtudiantEsprit' . "\0" . 'id', '' . "\0" . 'App\\Entity\\EtudiantEsprit' . "\0" . 'email', '' . "\0" . 'App\\Entity\\EtudiantEsprit' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\EtudiantEsprit' . "\0" . 'password', '' . "\0" . 'App\\Entity\\EtudiantEsprit' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\EtudiantEsprit' . "\0" . 'prenom', '' . "\0" . 'App\\Entity\\EtudiantEsprit' . "\0" . 'idEtudiant', '' . "\0" . 'App\\Entity\\EtudiantEsprit' . "\0" . 'cin', '' . "\0" . 'App\\Entity\\EtudiantEsprit' . "\0" . 'date_naissance', '' . "\0" . 'App\\Entity\\EtudiantEsprit' . "\0" . 'moyenne1', '' . "\0" . 'App\\Entity\\EtudiantEsprit' . "\0" . 'moyenne2', '' . "\0" . 'App\\Entity\\EtudiantEsprit' . "\0" . 'moyenne3', '' . "\0" . 'App\\Entity\\EtudiantEsprit' . "\0" . 'niveauFR', '' . "\0" . 'App\\Entity\\EtudiantEsprit' . "\0" . 'niveauAn'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (EtudiantEsprit $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(string $email): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserIdentifier(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserIdentifier', []);

        return parent::getUserIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoles(array $roles): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoles', [$roles]);

        return parent::setRoles($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword(string $password): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function getNom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom(string $nom): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenom', []);

        return parent::getPrenom();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenom(string $prenom): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenom', [$prenom]);

        return parent::setPrenom($prenom);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdEtudiant(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdEtudiant', []);

        return parent::getIdEtudiant();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdEtudiant(string $idEtudiant): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdEtudiant', [$idEtudiant]);

        return parent::setIdEtudiant($idEtudiant);
    }

    /**
     * {@inheritDoc}
     */
    public function getCin(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCin', []);

        return parent::getCin();
    }

    /**
     * {@inheritDoc}
     */
    public function setCin(int $cin): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCin', [$cin]);

        return parent::setCin($cin);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateNaissance(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateNaissance', []);

        return parent::getDateNaissance();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateNaissance(\DateTimeInterface $date_naissance): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateNaissance', [$date_naissance]);

        return parent::setDateNaissance($date_naissance);
    }

    /**
     * {@inheritDoc}
     */
    public function getMoyenne1(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMoyenne1', []);

        return parent::getMoyenne1();
    }

    /**
     * {@inheritDoc}
     */
    public function setMoyenne1(string $moyenne1): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMoyenne1', [$moyenne1]);

        return parent::setMoyenne1($moyenne1);
    }

    /**
     * {@inheritDoc}
     */
    public function getMoyenne2(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMoyenne2', []);

        return parent::getMoyenne2();
    }

    /**
     * {@inheritDoc}
     */
    public function setMoyenne2(string $moyenne2): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMoyenne2', [$moyenne2]);

        return parent::setMoyenne2($moyenne2);
    }

    /**
     * {@inheritDoc}
     */
    public function getMoyenne3(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMoyenne3', []);

        return parent::getMoyenne3();
    }

    /**
     * {@inheritDoc}
     */
    public function setMoyenne3(string $moyenne3): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMoyenne3', [$moyenne3]);

        return parent::setMoyenne3($moyenne3);
    }

    /**
     * {@inheritDoc}
     */
    public function getNiveauFR(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNiveauFR', []);

        return parent::getNiveauFR();
    }

    /**
     * {@inheritDoc}
     */
    public function setNiveauFR(string $niveauFR): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNiveauFR', [$niveauFR]);

        return parent::setNiveauFR($niveauFR);
    }

    /**
     * {@inheritDoc}
     */
    public function getNiveauAn(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNiveauAn', []);

        return parent::getNiveauAn();
    }

    /**
     * {@inheritDoc}
     */
    public function setNiveauAn(string $niveauAn): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNiveauAn', [$niveauAn]);

        return parent::setNiveauAn($niveauAn);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}
