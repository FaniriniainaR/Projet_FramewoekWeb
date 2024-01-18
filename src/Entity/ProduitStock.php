<?php

namespace App\Entity;

use App\Repository\ProduitStockRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitStockRepository::class)]
class ProduitStock
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_produit = null;

    #[ORM\Column]
    private ?int $id_stock = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomProduit(): ?string
    {
        return $this->nom_produit;
    }

    public function setNomProduit(string $nom_produit): static
    {
        $this->nom_produit = $nom_produit;

        return $this;
    }

    public function getIdStock(): ?int
    {
        return $this->id_stock;
    }

    public function setIdStock(int $id_stock): static
    {
        $this->id_stock = $id_stock;

        return $this;
    }
}
