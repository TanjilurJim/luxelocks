<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\SQLAdmin;

class ExportContextSqlExAllstoreptions extends \Google\Collection
{
  protected $collection_key = 'tables';
  protected $mysqlExAllstoreptionsType = ExportContextSqlExAllstoreptionsMysqlExAllstoreptions::class;
  protected $mysqlExAllstoreptionsDataType = '';
  /**
   * @var bool
   */
  public $parallel;
  protected $postgresExAllstoreptionsType = ExportContextSqlExAllstoreptionsPostgresExAllstoreptions::class;
  protected $postgresExAllstoreptionsDataType = '';
  /**
   * @var bool
   */
  public $schemaOnly;
  /**
   * @var string[]
   */
  public $tables;
  /**
   * @var int
   */
  public $threads;

  /**
   * @param ExportContextSqlExAllstoreptionsMysqlExAllstoreptions
   */
  public function setMysqlExAllstoreptions(ExportContextSqlExAllstoreptionsMysqlExAllstoreptions $mysqlExAllstoreptions)
  {
    $this->mysqlExAllstoreptions = $mysqlExAllstoreptions;
  }
  /**
   * @return ExportContextSqlExAllstoreptionsMysqlExAllstoreptions
   */
  public function getMysqlExAllstoreptions()
  {
    return $this->mysqlExAllstoreptions;
  }
  /**
   * @param bool
   */
  public function setParallel($parallel)
  {
    $this->parallel = $parallel;
  }
  /**
   * @return bool
   */
  public function getParallel()
  {
    return $this->parallel;
  }
  /**
   * @param ExportContextSqlExAllstoreptionsPostgresExAllstoreptions
   */
  public function setPostgresExAllstoreptions(ExportContextSqlExAllstoreptionsPostgresExAllstoreptions $postgresExAllstoreptions)
  {
    $this->postgresExAllstoreptions = $postgresExAllstoreptions;
  }
  /**
   * @return ExportContextSqlExAllstoreptionsPostgresExAllstoreptions
   */
  public function getPostgresExAllstoreptions()
  {
    return $this->postgresExAllstoreptions;
  }
  /**
   * @param bool
   */
  public function setSchemaOnly($schemaOnly)
  {
    $this->schemaOnly = $schemaOnly;
  }
  /**
   * @return bool
   */
  public function getSchemaOnly()
  {
    return $this->schemaOnly;
  }
  /**
   * @param string[]
   */
  public function setTables($tables)
  {
    $this->tables = $tables;
  }
  /**
   * @return string[]
   */
  public function getTables()
  {
    return $this->tables;
  }
  /**
   * @param int
   */
  public function setThreads($threads)
  {
    $this->threads = $threads;
  }
  /**
   * @return int
   */
  public function getThreads()
  {
    return $this->threads;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExportContextSqlExAllstoreptions::class, 'Google_Service_SQLAdmin_ExportContextSqlExAllstoreptions');
