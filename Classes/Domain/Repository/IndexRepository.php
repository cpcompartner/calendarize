<?php
/**
 * Index repository
 *
 * @category   Extension
 * @package    Calendarize
 * @subpackage Domain\Repository
 * @author     Tim Lochmüller
 */

namespace HDNET\Calendarize\Domain\Repository;

/**
 * Index repository
 *
 * @package    Calendarize
 * @subpackage Domain\Repository
 * @author     Tim Lochmüller
 */
class IndexRepository extends AbstractRepository {

	/**
	 * Create a default query
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\QueryInterface
	 */
	public function createQuery() {
		$query = parent::createQuery();
		$query->getQuerySettings()
			->setRespectStoragePage(FALSE);
		return $query;
	}

	/**
	 * Find List
	 *
	 * @return array|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface
	 */
	public function findList() {
		return $this->findAll();
	}

	/**
	 * find Year
	 *
	 * @return array|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface
	 */
	public function findYear() {
		return $this->findAll();
	}

	/**
	 * find Month
	 *
	 * @return array|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface
	 */
	public function findMonth() {
		return $this->findAll();
	}

	/**
	 * find day
	 *
	 * @return array|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface
	 */
	public function findDay() {
		return $this->findAll();
	}
}