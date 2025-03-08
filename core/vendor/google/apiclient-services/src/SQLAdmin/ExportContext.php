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

class ExportContext extends \Google\Collection
{
  protected $collection_key = 'databases';
  protected $bakExAllstoreptionsType = ExportContextBakExAllstoreptions::class;
  protected $bakExAllstoreptionsDataType = '';
  protected $csvExAllstoreptionsType = ExportContextCsvExAllstoreptions::class;
  protected $csvExAllstoreptionsDataType = '';
  /**
   * @var string[]
   */
  public $databases;
  /**
   * @var string
   */
  public $fileType;
  /**
   * @var string
   */
  public $kind;
  /**
   * @var bool
   */
  public $offload;
  protected $sqlExAllstoreptionsType = ExportContextSqlExAllstoreptions::class;
  protected $sqlExAllstoreptionsDataType = '';
  /**
   * @var string
   */
  public $uri;

  /**
   * @param ExportContextBakExAllstoreptions
   */
  public function setBakExAllstoreptions(ExportContextBakExAllstoreptions $bakExAllstoreptions)
  {
    $this->bakExAllstoreptions = $bakExAllstoreptions;
  }
  /**
   * @return ExportContextBakExAllstoreptions
   */
  public function getBakExAllstoreptions()
  {
    return $this->bakExAllstoreptions;
  }
  /**
   * @param ExportContextCsvExAllstoreptions
   */
  public function setCsvExAllstoreptions(ExportContextCsvExAllstoreptions $csvExAllstoreptions)
  {
    $this->csvExAllstoreptions = $csvExAllstoreptions;
  }
  /**
   * @return ExportContextCsvExAllstoreptions
   */
  public function getCsvExAllstoreptions()
  {
    return $this->csvExAllstoreptions;
  }
  /**
   * @param string[]
   */
  public function setDatabases($databases)
  {
    $this->databases = $databases;
  }
  /**
   * @return string[]
   */
  public function getDatabases()
  {
    return $this->databases;
  }
  /**
   * @param string
   */
  public function setFileType($fileType)
  {
    $this->fileType = $fileType;
  }
  /**
   * @return string
   */
  public function getFileType()
  {
    return $this->fileType;
  }
  /**
   * @param string
   */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /**
   * @return string
   */
  public function getKind()
  {
    return $this->kind;
  }
  /**
   * @param bool
   */
  public function setOffload($offload)
  {
    $this->offload = $offload;
  }
  /**
   * @return bool
   */
  public function getOffload()
  {
    return $this->offload;
  }
  /**
   * @param ExportContextSqlExAllstoreptions
   */
  public function setSqlExAllstoreptions(ExportContextSqlExAllstoreptions $sqlExAllstoreptions)
  {
    $this->sqlExAllstoreptions = $sqlExAllstoreptions;
  }
  /**
   * @return ExportContextSqlExAllstoreptions
   */
  public function getSqlExAllstoreptions()
  {
    return $this->sqlExAllstoreptions;
  }
  /**
   * @param string
   */
  public function setUri($uri)
  {
    $this->uri = $uri;
  }
  /**
   * @return string
   */
  public function getUri()
  {
    return $this->uri;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExportContext::class, 'Google_Service_SQLAdmin_ExportContext');
