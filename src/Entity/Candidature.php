<?php

namespace App\Entity;

use App\Repository\CandidatureRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CandidatureRepository::class)]
class Candidature
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Opportinute $Opportinute = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?EtudiantEsprit $EtudiantEsprit = null;

    #[ORM\Column(type: 'string', length: 255)]
    private $resultat = 'EnCoursDExecution';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOpportinute(): ?Opportinute
    {
        return $this->Opportinute;
    }

    public function setOpportinute(?Opportinute $Opportinute): static
    {
        $this->Opportinute = $Opportinute;

        return $this;
    }

    public function getEtudiantEsprit(): ?EtudiantEsprit
    {
        return $this->EtudiantEsprit;
    }

    public function setEtudiantEsprit(?EtudiantEsprit $EtudiantEsprit): static
    {
        $this->EtudiantEsprit = $EtudiantEsprit;

        return $this;
    }

    public function getResultat(): ?string
    {
        return $this->resultat;
    }

    public function setResultat(string $resultat): self
    {
        if ($resultat === 'Accepté(e)' || $resultat === 'Refusé(e)') {
            $this->resultat = $resultat;
        } else {
            throw new \InvalidArgumentException("Le résultat doit être 'Accepté(e)' ou 'Refusé(e)'.");
        }

        return $this;
    }
}
