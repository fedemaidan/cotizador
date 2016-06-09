<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Rango;
/**
 * RangoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RangoRepository extends EntityRepository
{

	public function rangoPorValorYCodigo($codigo,$valor) {

		$qb = $this->getEntityManager()->createQueryBuilder()
		->select('r')
		->where("r.codigo = '$codigo'")
		->andWhere(" $valor >= r.desde ")
		->andWhere(" $valor <= r.hasta")
		->from(Rango::ORM_ENTITY, 'r');

		return $qb->getQuery()->getResult();

	}


	public function rangoPorCodigo($codigo) {

		$qb = $this->getEntityManager()->createQueryBuilder()
		->select('r')
		->where("r.codigo = '$codigo'")
		->from(Rango::ORM_ENTITY, 'r')
		->orderBy("r.desde","ASC");

		return $qb->getQuery()->getResult();

	}


	public function rangoTipo($codigo) {

		$qb = $this->getEntityManager()->createQueryBuilder()
		->select('r.tipo')
		->where("r.codigo = '$codigo'")
		->from(Rango::ORM_ENTITY, 'r');

		return $qb->getQuery()->getResult()[0]["tipo"];

	}

		

		
}
