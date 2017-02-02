<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Form\IndexForm;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $request = $this->getRequest();
        //var_dump('hoge');exit;
        if ($request->isPost()) {
            
            $post_parameter = $request->getPost('searchText');
            
            $result = $this->getGoogleSearchResult($post_parameter);
            echo $result;
        }
        
        
        //form return
        $title = 'Google Console Search';
        
        return new ViewModel(array(
            'title'  => $title,
        ));
    }
    
    private function getGoogleSearchResult($post_parameter)
    {
        $target_str = $post_parameter;
        $url = 'http://search.yahoo.co.jp/search?p='.urlencode($target_str);
        $data = mb_convert_encoding(file_get_contents($url), "utf8", "auto");
        
        return $data;
    }

        private function getGoogleService()
    {
        return;
    }
    
}
