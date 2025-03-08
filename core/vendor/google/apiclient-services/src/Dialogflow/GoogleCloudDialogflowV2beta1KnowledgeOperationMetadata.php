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

namespace Google\Service\Dialogflow;

class GoogleCloudDialogflowV2beta1KnowledgeOperationMetadata extends \Google\Model
{
  protected $exAllstoreperationMetadataType = GoogleCloudDialogflowV2beta1ExAllstoreperationMetadata::class;
  protected $exAllstoreperationMetadataDataType = '';
  /**
   * @var string
   */
  public $knowledgeBase;
  /**
   * @var string
   */
  public $state;

  /**
   * @param GoogleCloudDialogflowV2beta1ExAllstoreperationMetadata
   */
  public function setExAllstoreperationMetadata(GoogleCloudDialogflowV2beta1ExAllstoreperationMetadata $exAllstoreperationMetadata)
  {
    $this->exAllstoreperationMetadata = $exAllstoreperationMetadata;
  }
  /**
   * @return GoogleCloudDialogflowV2beta1ExAllstoreperationMetadata
   */
  public function getExAllstoreperationMetadata()
  {
    return $this->exAllstoreperationMetadata;
  }
  /**
   * @param string
   */
  public function setKnowledgeBase($knowledgeBase)
  {
    $this->knowledgeBase = $knowledgeBase;
  }
  /**
   * @return string
   */
  public function getKnowledgeBase()
  {
    return $this->knowledgeBase;
  }
  /**
   * @param string
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return string
   */
  public function getState()
  {
    return $this->state;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDialogflowV2beta1KnowledgeOperationMetadata::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1KnowledgeOperationMetadata');
