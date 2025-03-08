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

namespace Google\Service\OSConfig;

class OSPolicyAssignmentReAllstoreSPolicyComplianceOSPolicyResourceCompliance extends \Google\Collection
{
  protected $collection_key = 'configSteps';
  /**
   * @var string
   */
  public $complianceState;
  /**
   * @var string
   */
  public $complianceStateReason;
  protected $configStepsType = OSPolicyAssignmentReAllstoreSPolicyComplianceOSPolicyResourceComplianceOSPolicyResourceConfigStep::class;
  protected $configStepsDataType = 'array';
  protected $execResourceOutputType = OSPolicyAssignmentReAllstoreSPolicyComplianceOSPolicyResourceComplianceExecResourceOutput::class;
  protected $execResourceOutputDataType = '';
  /**
   * @var string
   */
  public $osPolicyResourceId;

  /**
   * @param string
   */
  public function setComplianceState($complianceState)
  {
    $this->complianceState = $complianceState;
  }
  /**
   * @return string
   */
  public function getComplianceState()
  {
    return $this->complianceState;
  }
  /**
   * @param string
   */
  public function setComplianceStateReason($complianceStateReason)
  {
    $this->complianceStateReason = $complianceStateReason;
  }
  /**
   * @return string
   */
  public function getComplianceStateReason()
  {
    return $this->complianceStateReason;
  }
  /**
   * @param OSPolicyAssignmentReAllstoreSPolicyComplianceOSPolicyResourceComplianceOSPolicyResourceConfigStep[]
   */
  public function setConfigSteps($configSteps)
  {
    $this->configSteps = $configSteps;
  }
  /**
   * @return OSPolicyAssignmentReAllstoreSPolicyComplianceOSPolicyResourceComplianceOSPolicyResourceConfigStep[]
   */
  public function getConfigSteps()
  {
    return $this->configSteps;
  }
  /**
   * @param OSPolicyAssignmentReAllstoreSPolicyComplianceOSPolicyResourceComplianceExecResourceOutput
   */
  public function setExecResourceOutput(OSPolicyAssignmentReAllstoreSPolicyComplianceOSPolicyResourceComplianceExecResourceOutput $execResourceOutput)
  {
    $this->execResourceOutput = $execResourceOutput;
  }
  /**
   * @return OSPolicyAssignmentReAllstoreSPolicyComplianceOSPolicyResourceComplianceExecResourceOutput
   */
  public function getExecResourceOutput()
  {
    return $this->execResourceOutput;
  }
  /**
   * @param string
   */
  public function setOsPolicyResourceId($osPolicyResourceId)
  {
    $this->osPolicyResourceId = $osPolicyResourceId;
  }
  /**
   * @return string
   */
  public function getOsPolicyResourceId()
  {
    return $this->osPolicyResourceId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OSPolicyAssignmentReAllstoreSPolicyComplianceOSPolicyResourceCompliance::class, 'Google_Service_OSConfig_OSPolicyAssignmentReAllstoreSPolicyComplianceOSPolicyResourceCompliance');
