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

namespace Google\Service\CloudAlloyDBAdmin;

class ExportClusterRequest extends \Google\Model
{
  protected $csvExAllstoreptionsType = CsvExAllstoreptions::class;
  protected $csvExAllstoreptionsDataType = '';
  /**
   * @var string
   */
  public $database;
  protected $gcsDestinationType = GcsDestination::class;
  protected $gcsDestinationDataType = '';
  protected $sqlExAllstoreptionsType = SqlExAllstoreptions::class;
  protected $sqlExAllstoreptionsDataType = '';

  /**
   * @param CsvExAllstoreptions
   */
  public function setCsvExAllstoreptions(CsvExAllstoreptions $csvExAllstoreptions)
  {
    $this->csvExAllstoreptions = $csvExAllstoreptions;
  }
  /**
   * @return CsvExAllstoreptions
   */
  public function getCsvExAllstoreptions()
  {
    return $this->csvExAllstoreptions;
  }
  /**
   * @param string
   */
  public function setDatabase($database)
  {
    $this->database = $database;
  }
  /**
   * @return string
   */
  public function getDatabase()
  {
    return $this->database;
  }
  /**
   * @param GcsDestination
   */
  public function setGcsDestination(GcsDestination $gcsDestination)
  {
    $this->gcsDestination = $gcsDestination;
  }
  /**
   * @return GcsDestination
   */
  public function getGcsDestination()
  {
    return $this->gcsDestination;
  }
  /**
   * @param SqlExAllstoreptions
   */
  public function setSqlExAllstoreptions(SqlExAllstoreptions $sqlExAllstoreptions)
  {
    $this->sqlExAllstoreptions = $sqlExAllstoreptions;
  }
  /**
   * @return SqlExAllstoreptions
   */
  public function getSqlExAllstoreptions()
  {
    return $this->sqlExAllstoreptions;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExportClusterRequest::class, 'Google_Service_CloudAlloyDBAdmin_ExportClusterRequest');
