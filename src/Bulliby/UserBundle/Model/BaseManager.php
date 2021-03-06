<?php

namespace Bulliby\UserBundle\Model;

abstract class BaseManager
{
	protected function persistAndFlush($entity)
	{
		$this->em->persist($entity);
		$this->em->flush();
	}
}
