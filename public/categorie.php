<?php


class categories
{
    private $idQuestionnaire;
    private $libelleQuestionnaire;


    public function construct($idQuestionnaire , $libelleQuestionnaire)
    {
        $this->idQuestionnaire = $idQuestionnaire;
        $this->libelleQuestionnaire = $libelleQuestionnaire;
    }
}

?>