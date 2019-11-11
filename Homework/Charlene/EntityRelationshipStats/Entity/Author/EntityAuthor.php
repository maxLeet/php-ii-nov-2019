<?php
namespace EntityRelationshipStats\Entity\Author;

abstract class EntityAuthor implements EntityAuthorsInterface
{
    public function getEntityAuthorUserId($entity_name) {
        $entityObject = loadEntityByName($entity_name);
        $author_name $entityObject->$author_name;
        return $author_name;
    };

    public function getAllEntitiesByAuthorId($author_id) {
        $allEntityObjects = loadAllAvailableEntities();
        $matchingEntities = [];
        foreach ($allEntityObjects as $entity => author_id) {
            if (author_id === $author_id ) {
                $matchingEntities .= $entity_id;
            }
        }
    };

}
