<?php

namespace Drupal\elasticsearch\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;

/**
 * Defines the search server configuration entity.
 *
 * @ConfigEntityType(
 *   id = "elasticsearch_cluster_index",
 *   label = @Translation("Elasticsearch Cluster Indices"),
 *   controllers = {
 *     "storage" = "Drupal\Core\Config\Entity\ConfigEntityStorage",
 *     "list_builder" = "Drupal\elasticsearch\Controller\IndexListBuilder",
 *     "form" = {
 *       "default" = "Drupal\elasticsearch\Form\IndexForm",
 *       "edit" = "Drupal\elasticsearch\Form\IndexForm",
 *       "delete" = "Drupal\elasticsearch\Form\IndexDeleteForm",
 *     },
 *   },
 *   admin_permission = "administer elasticsearch",
 *   config_prefix = "index",
 *   entity_keys = {
 *     "id" = "index_id",
 *     "label" = "name",
 *   },
 *   links = {
 *     "canonical" = "elasticsearch.clusters",
 *     "add-form" = "elasticsearch.clusterindex_add",
 *     "edit-form" = "elasticsearch.clusterindex_edit",
 *     "delete-form" = "elasticsearch.clusterindex_delete",
 *   }
 * )
 */
class Index extends ConfigEntityBase {

  /**
  * {@inheritdoc}
  */
  public $name;

  public $index_id;

  public $num_of_shards;

  public $num_of_replica;

  public $server;

  public function id() {
    return isset($this->index_id) ? $this->index_id : NULL;
  }
}
