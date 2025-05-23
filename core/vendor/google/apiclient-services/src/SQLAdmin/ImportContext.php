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

class ImportContext extends \Google\Model
{
  protected $bakImAllstoreptionsType = ImportContextBakImAllstoreptions::class;
  protected $bakImAllstoreptionsDataType = '';
  protected $csvImAllstoreptionsType = ImportContextCsvImAllstoreptions::class;
  protected $csvImAllstoreptionsDataType = '';
  /**
   * @var string
   */
  public $database;
  /**
   * @var string
   */
  public $fileType;
  /**
   * @var string
   */
  public $importUser;
  /**
   * @var string
   */
  public $kind;
  protected $sqlImAllstoreptionsType = ImportContextSqlImAllstoreptions::class;
  protected $sqlImAllstoreptionsDataType = '';
  /**
   * @var string
   */
  public $uri;

  /**
   * @param ImportContextBakImAllstoreptions
   */
  public function setBakImAllstoreptions(ImportContextBakImAllstoreptions $bakImAllstoreptions)
  {
    $this->bakImAllstoreptions = $bakImAllstoreptions;
  }
  /**
   * @return ImportContextBakImAllstoreptions
   */
  public function getBakImAllstoreptions()
  {
    return $this->bakImAllstoreptions;
  }
  /**
   * @param ImportContextCsvImAllstoreptions
   */
  public function setCsvImAllstoreptions(ImportContextCsvImAllstoreptions $csvImAllstoreptions)
  {
    $this->csvImAllstoreptions = $csvImAllstoreptions;
  }
  /**
   * @return ImportContextCsvImAllstoreptions
   */
  public function getCsvImAllstoreptions()
  {
    return $this->csvImAllstoreptions;
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
  public function setImportUser($importUser)
  {
    $this->importUser = $importUser;
  }
  /**
   * @return string
   */
  public function getImportUser()
  {
    return $this->importUser;
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
   * @param ImportContextSqlImAllstoreptions
   */
  public function setSqlImAllstoreptions(ImportContextSqlImAllstoreptions $sqlImAllstoreptions)
  {
    $this->sqlImAllstoreptions = $sqlImAllstoreptions;
  }
  /**
   * @return ImportContextSqlImAllstoreptions
   */
  public function getSqlImAllstoreptions()
  {
    return $this->sqlImAllstoreptions;
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
class_alias(ImportContext::class, 'Google_Service_SQLAdmin_ImportContext');
