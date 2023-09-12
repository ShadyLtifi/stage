<?php

namespace App\Entity;

use App\Repository\EtudiantEspritRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: EtudiantEspritRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'email est déja existe')]
#[UniqueEntity(fields: ['cin'], message: 'CIN est déja existe')]
class EtudiantEsprit implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Assert\NotBlank(message:"le champ disponible est obligatoire")]
    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[Assert\NotBlank(message:"le champ disponible est obligatoire")]
    #[Assert\Length(
        min: 2,
        max: 10,
        minMessage: 'il faut que le mdp contient au moins {{ limit }} caractères ',
        maxMessage: 'il faut que le mdp ne dépasse pas {{ limit }} caractères',)]
    #[ORM\Column]
    private ?string $password = null;

    #[Assert\NotBlank(message:"le champ disponible est obligatoire")]
    #[ORM\Column(length: 50)]
    private ?string $nom = null;

    #[Assert\NotBlank(message:"le champ disponible est obligatoire")]
    #[ORM\Column(length: 255)]
    private ?string $prenom = null;
    #[Assert\NotBlank(message:"le champ disponible est obligatoire")]
    #[ORM\Column(length: 20, unique: true)]
    private ?string $idEtudiant = null;

    #[Assert\NotBlank(message:"le champ disponible est obligatoire")]
    #[Assert\Length(
        min: 8,
        max: 8,
        minMessage: 'il faut que la CIN contient  {{ limit }} caractères ',
        maxMessage: 'il faut que la CIN contient  {{ limit }} caractères',)]
    #[ORM\Column]
    private ?int $cin = null;

    #[Assert\NotBlank(message:"le champ disponible est obligatoire")]
    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_naissance = null;

    #[Assert\NotBlank(message:"le champ disponible est obligatoire")]
    #[ORM\Column(length: 20)]
    private ?string $moyenne1 = null;

    #[Assert\NotBlank(message:"le champ disponible est obligatoire")]
    #[ORM\Column(length: 255)]
    private ?string $moyenne2 = null;

    #[Assert\NotBlank(message:"le champ disponible est obligatoire")]
    #[ORM\Column(length: 255)]
    private ?string $moyenne3 = null;

    #[Assert\NotBlank(message:"le champ disponible est obligatoire")]
    #[ORM\Column(length: 255)]
    private ?string $niveauFR = null;

    #[Assert\NotBlank(message:"le champ disponible est obligatoire")]
    #[ORM\Column(length: 255)]
    private ?string $niveauAn = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_ETUDIANT';

        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getIdEtudiant(): ?string
    {
        return $this->idEtudiant;
    }

    public function setIdEtudiant(string $idEtudiant): static
    {
        $this->idEtudiant = $idEtudiant;

        return $this;
    }

    public function getCin(): ?int
    {
        return $this->cin;
    }

    public function setCin(int $cin): static
    {
        $this->cin = $cin;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->date_naissance;
    }

    public function setDateNaissance(\DateTimeInterface $date_naissance): static
    {
        $this->date_naissance = $date_naissance;

        return $this;
    }

    public function getMoyenne1(): ?string
    {
        return $this->moyenne1;
    }

    public function setMoyenne1(string $moyenne1): static
    {
        $this->moyenne1 = $moyenne1;

        return $this;
    }

    public function getMoyenne2(): ?string
    {
        return $this->moyenne2;
    }

    public function setMoyenne2(string $moyenne2): static
    {
        $this->moyenne2 = $moyenne2;

        return $this;
    }

    public function getMoyenne3(): ?string
    {
        return $this->moyenne3;
    }

    public function setMoyenne3(string $moyenne3): static
    {
        $this->moyenne3 = $moyenne3;

        return $this;
    }

    public function getNiveauFR(): ?string
    {
        return $this->niveauFR;
    }

    public function setNiveauFR(string $niveauFR): static
    {
        $this->niveauFR = $niveauFR;

        return $this;
    }

    public function getNiveauAn(): ?string
    {
        return $this->niveauAn;
    }

    public function setNiveauAn(string $niveauAn): static
    {
        $this->niveauAn = $niveauAn;

        return $this;
    }

    public function __toString()
    {
        return $this->idEtudiant; // Return the property you want to use as the string representation
    }
}
