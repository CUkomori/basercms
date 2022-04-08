<?php
/**
 * baserCMS :  Based Website Development Project <https://basercms.net>
 * Copyright (c) NPO baser foundation <https://baserfoundation.org/>
 *
 * @copyright     Copyright (c) NPO baser foundation
 * @link          https://basercms.net baserCMS Project
 * @since         5.0.0
 * @license       https://basercms.net/license/index.html MIT License
 */

namespace BaserCore\Service;

use Cake\Datasource\EntityInterface;
use Cake\Datasource\ResultSetInterface;
use Cake\ORM\Query;

/**
 * Interface DblogServiceInterface
 * @package BaserCore\Service
 */
interface DblogServiceInterface
{

    /**
     * 新規登録する
     * @param array $data
     * @return EntityInterface
     * @throws \Cake\ORM\Exception\PersistenceFailedException
     */
    public function create(string $message): EntityInterface;

    /**
     * DBログ一覧を取得
     * @param array $queryParams
     * @return Query
     */
    public function getIndex(array $queryParams): Query;

    /**
     * 最新のDBログ一覧を取得
     * @param int $limit
     */
    public function getDblogs(int $limit): ResultSetInterface;

    /**
     * DBログをすべて削除
     * @return int
     */
    public function deleteAll(): int;

}
