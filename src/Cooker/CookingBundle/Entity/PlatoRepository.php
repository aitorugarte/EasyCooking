<?php

namespace Cooker\CookingBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * RecetaRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PlatoRepository extends EntityRepository
{
	public function getPlatos($limit = null)
	{
	$qp = $this->createQueryBuilder('p')
	->select('p');

	return $qp->getQuery()->getResult();
	}

}