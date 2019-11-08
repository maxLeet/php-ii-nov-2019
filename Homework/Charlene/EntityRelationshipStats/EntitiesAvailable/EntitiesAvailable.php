<?php
// For Thu 7 Nov 2019
// Charlene
// Filename: EntitiesAvailable.php
/*
* Entities Available Stats
* Tracks the number of Nodes (page types) and Paragraphs (components) in a CMS
*
*/

namespace EntityRelationshipStats\EntitiesAvailable;

use DateTime;

class EntitiesAvailable
{
    // coding standard recommends variables start with lowercase first letter
    protected $totalParagraphTypes, $totalNodeTypes, $paragraphTypeNames, $nodeTypeNames;
    public const MODULE_NAME = 'Entity Relationship Stats';
    public const DEFAULT_DATE_FORMAT = 'Y-m-d H:i:s';
    private $check_timestamp;

    public function __construct(int $totalParagraphTypes, int $totalNodeTypes, array $paragraphTypeNames, array $nodeTypeNames)
    {
        $current_time = new DateTime();
        $current_time_raw = $current_time->format(self::DEFAULT_DATE_FORMAT);
        $check_timestamp = $current_time->getTimestamp();

        //$this->node_type_date = $checkDate; ???
        $this->totalParagraphTypes = $totalParagraphTypes;
        $this->totalNodeTypes = $totalNodeTypes;
        $this->nodeTypeNames = $nodeTypeNames;
        $this->paragraphTypeNames = $paragraphTypeNames;
    }

    public function getParagraphTypeNames() : array {
        return $this->paragraphTypeNames;
    }

    public function getNodeTypeNames() : array {
        return $this->nodeTypeNames;
    }

	public function getNodeTypeNamesAsString() : string
	{
		return implode(',',$this->getNodeTypeNames());
	}

    public function getTotalParagraphTypes() : int {
        return $this->totalParagraphTypes;
    }

    public function getTotalNodeTypes() : int {
        return $this->totalNodeTypes;
    }


}
