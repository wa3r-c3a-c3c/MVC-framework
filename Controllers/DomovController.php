<?php
class DomovController extends Controller {
    function process($params) {
        // Header of page (title)
        $this->header["title"] = "Domovská stránka";
        $this->header["description"] = "Hlavní stránka našeho webu";

        $this->data["articles"] = ArticleManager::getAllArticles();

        // Setup layout
        $this->view = "domov";

    }
}