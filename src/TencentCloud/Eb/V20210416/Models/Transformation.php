<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 一个转换器
 *
 * @method Extraction getExtraction() 获取描述如何提取数据，{"ExtractionInputPath":"$.data.payload","Format":"JSON"}
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtraction(Extraction $Extraction) 设置描述如何提取数据，{"ExtractionInputPath":"$.data.payload","Format":"JSON"}
注意：此字段可能返回 null，表示取不到有效值。
 * @method EtlFilter getEtlFilter() 获取描述如何过滤数据;{"Filter":"{\"source\":\"ckafka.cloud.tencent\"}"}
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEtlFilter(EtlFilter $EtlFilter) 设置描述如何过滤数据;{"Filter":"{\"source\":\"ckafka.cloud.tencent\"}"}
注意：此字段可能返回 null，表示取不到有效值。
 * @method Transform getTransform() 获取描述如何数据转换;"OutputStructs":[{"Key":"op","Value":"$.op","ValueType":"JSONPATH"}]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransform(Transform $Transform) 设置描述如何数据转换;"OutputStructs":[{"Key":"op","Value":"$.op","ValueType":"JSONPATH"}]
注意：此字段可能返回 null，表示取不到有效值。
 */
class Transformation extends AbstractModel
{
    /**
     * @var Extraction 描述如何提取数据，{"ExtractionInputPath":"$.data.payload","Format":"JSON"}
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Extraction;

    /**
     * @var EtlFilter 描述如何过滤数据;{"Filter":"{\"source\":\"ckafka.cloud.tencent\"}"}
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EtlFilter;

    /**
     * @var Transform 描述如何数据转换;"OutputStructs":[{"Key":"op","Value":"$.op","ValueType":"JSONPATH"}]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Transform;

    /**
     * @param Extraction $Extraction 描述如何提取数据，{"ExtractionInputPath":"$.data.payload","Format":"JSON"}
注意：此字段可能返回 null，表示取不到有效值。
     * @param EtlFilter $EtlFilter 描述如何过滤数据;{"Filter":"{\"source\":\"ckafka.cloud.tencent\"}"}
注意：此字段可能返回 null，表示取不到有效值。
     * @param Transform $Transform 描述如何数据转换;"OutputStructs":[{"Key":"op","Value":"$.op","ValueType":"JSONPATH"}]
注意：此字段可能返回 null，表示取不到有效值。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Extraction",$param) and $param["Extraction"] !== null) {
            $this->Extraction = new Extraction();
            $this->Extraction->deserialize($param["Extraction"]);
        }

        if (array_key_exists("EtlFilter",$param) and $param["EtlFilter"] !== null) {
            $this->EtlFilter = new EtlFilter();
            $this->EtlFilter->deserialize($param["EtlFilter"]);
        }

        if (array_key_exists("Transform",$param) and $param["Transform"] !== null) {
            $this->Transform = new Transform();
            $this->Transform->deserialize($param["Transform"]);
        }
    }
}
