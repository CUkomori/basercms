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

namespace BaserCore\Controller\Admin;

use BaserCore\Utility\BcUtil;
use Cake\Core\Plugin;
use BaserCore\Annotation\UnitTest;
use BaserCore\Annotation\NoTodo;
use BaserCore\Annotation\Checked;

/**
 * Class DashboardController
 * @package BaserCore\Controller\Admin
 */
class DashboardController extends BcAdminAppController
{

    /**
     * モデル
     *
     * @var array
     */
    public $uses = ['BaserCore.User', 'BaserCore.Page'];

    /**
     * [ADMIN] 管理者ダッシュボードページを表示する
     *
     * @return void
     * @checked
     * @noTodo
     * @unitTest
     */
    public function index()
    {
        $this->setTitle(__d('baser', 'ダッシュボード'));
        $panels = [];
        $plugins = Plugin::loaded();
        if ($plugins) {
            foreach($plugins as $plugin) {
                $templates = BcUtil::getTemplateList('Admin/element/Dashboard', $plugin);
                $panels[$plugin] = $templates;
            }
        }
        $this->set('panels', $panels);
    }

}
