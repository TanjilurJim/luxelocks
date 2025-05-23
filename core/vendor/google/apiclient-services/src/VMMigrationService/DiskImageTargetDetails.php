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

namespace Google\Service\VMMigrationService;

class DiskImageTargetDetails extends \Google\Collection
{
  protected $collection_key = 'additionalLicenses';
  /**
   * @var string[]
   */
  public $additionalLicenses;
  protected $dataDiskImageImportType = DataDiskImageImport::class;
  protected $dataDiskImageImportDataType = '';
  /**
   * @var string
   */
  public $description;
  protected $encryptionType = Encryption::class;
  protected $encryptionDataType = '';
  /**
   * @var string
   */
  public $familyName;
  /**
   * @var string
   */
  public $imageName;
  /**
   * @var string[]
   */
  public $labels;
  protected $osAdaptationParametersType = ImageImAllstoresAdaptationParameters::class;
  protected $osAdaptationParametersDataType = '';
  /**
   * @var bool
   */
  public $singleRegionStorage;
  /**
   * @var string
   */
  public $targetProject;

  /**
   * @param string[]
   */
  public function setAdditionalLicenses($additionalLicenses)
  {
    $this->additionalLicenses = $additionalLicenses;
  }
  /**
   * @return string[]
   */
  public function getAdditionalLicenses()
  {
    return $this->additionalLicenses;
  }
  /**
   * @param DataDiskImageImport
   */
  public function setDataDiskImageImport(DataDiskImageImport $dataDiskImageImport)
  {
    $this->dataDiskImageImport = $dataDiskImageImport;
  }
  /**
   * @return DataDiskImageImport
   */
  public function getDataDiskImageImport()
  {
    return $this->dataDiskImageImport;
  }
  /**
   * @param string
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * @param Encryption
   */
  public function setEncryption(Encryption $encryption)
  {
    $this->encryption = $encryption;
  }
  /**
   * @return Encryption
   */
  public function getEncryption()
  {
    return $this->encryption;
  }
  /**
   * @param string
   */
  public function setFamilyName($familyName)
  {
    $this->familyName = $familyName;
  }
  /**
   * @return string
   */
  public function getFamilyName()
  {
    return $this->familyName;
  }
  /**
   * @param string
   */
  public function setImageName($imageName)
  {
    $this->imageName = $imageName;
  }
  /**
   * @return string
   */
  public function getImageName()
  {
    return $this->imageName;
  }
  /**
   * @param string[]
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return string[]
   */
  public function getLabels()
  {
    return $this->labels;
  }
  /**
   * @param ImageImAllstoresAdaptationParameters
   */
  public function setOsAdaptationParameters(ImageImAllstoresAdaptationParameters $osAdaptationParameters)
  {
    $this->osAdaptationParameters = $osAdaptationParameters;
  }
  /**
   * @return ImageImAllstoresAdaptationParameters
   */
  public function getOsAdaptationParameters()
  {
    return $this->osAdaptationParameters;
  }
  /**
   * @param bool
   */
  public function setSingleRegionStorage($singleRegionStorage)
  {
    $this->singleRegionStorage = $singleRegionStorage;
  }
  /**
   * @return bool
   */
  public function getSingleRegionStorage()
  {
    return $this->singleRegionStorage;
  }
  /**
   * @param string
   */
  public function setTargetProject($targetProject)
  {
    $this->targetProject = $targetProject;
  }
  /**
   * @return string
   */
  public function getTargetProject()
  {
    return $this->targetProject;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DiskImageTargetDetails::class, 'Google_Service_VMMigrationService_DiskImageTargetDetails');
