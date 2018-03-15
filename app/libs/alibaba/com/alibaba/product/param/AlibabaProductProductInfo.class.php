<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/product/param/AlibabaProductProductAttribute.class.php');
include_once ('com/alibaba/product/param/AlibabaProductProductImageInfo.class.php');
include_once ('com/alibaba/product/param/AlibabaProductProductSKUInfo.class.php');
include_once ('com/alibaba/product/param/AlibabaProductProductSaleInfo.class.php');
include_once ('com/alibaba/product/param/AlibabaProductProductShippingInfo.class.php');
include_once ('com/alibaba/product/param/AlibabaProductProductInternationalTradeInfo.class.php');
include_once ('com/alibaba/product/param/AlibabaProductProductExtendInfo.class.php');

class AlibabaProductProductInfo extends SDKDomain {

       	
    private $productID;
    
        /**
    * @return 商品ID
    */
        public function getProductID() {
        return $this->productID;
    }
    
    /**
     * 设置商品ID     
     * @param Long $productID     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductID( $productID) {
        $this->productID = $productID;
    }
    
        	
    private $productType;
    
        /**
    * @return 商品类型，在线批发商品(wholesale)或者询盘商品(sourcing)，1688网站缺省为wholesale
    */
        public function getProductType() {
        return $this->productType;
    }
    
    /**
     * 设置商品类型，在线批发商品(wholesale)或者询盘商品(sourcing)，1688网站缺省为wholesale     
     * @param String $productType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductType( $productType) {
        $this->productType = $productType;
    }
    
        	
    private $categoryID;
    
        /**
    * @return 类目ID，标识商品所属类目
    */
        public function getCategoryID() {
        return $this->categoryID;
    }
    
    /**
     * 设置类目ID，标识商品所属类目     
     * @param Long $categoryID     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCategoryID( $categoryID) {
        $this->categoryID = $categoryID;
    }
    
        	
    private $attributes;
    
        /**
    * @return 商品属性和属性值
    */
        public function getAttributes() {
        return $this->attributes;
    }
    
    /**
     * 设置商品属性和属性值     
     * @param array include @see AlibabaProductProductAttribute[] $attributes     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAttributes(AlibabaProductProductAttribute $attributes) {
        $this->attributes = $attributes;
    }
    
        	
    private $groupID;
    
        /**
    * @return 分组ID，确定商品所属分组。1688可传入多个分组ID，国际站同一个商品只能属于一个分组，因此默认只取第一个
    */
        public function getGroupID() {
        return $this->groupID;
    }
    
    /**
     * 设置分组ID，确定商品所属分组。1688可传入多个分组ID，国际站同一个商品只能属于一个分组，因此默认只取第一个     
     * @param array include @see Long[] $groupID     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGroupID( $groupID) {
        $this->groupID = $groupID;
    }
    
        	
    private $status;
    
        /**
    * @return 商品状态。published:上网状态;member expired:会员撤销;auto expired:自然过期;expired:过期(包含手动过期与自动过期);member deleted:会员删除;modified:修改;new:新发;deleted:删除;TBD:to be delete;approved:审批通过;auditing:审核中;untread:审核不通过;
    */
        public function getStatus() {
        return $this->status;
    }
    
    /**
     * 设置商品状态。published:上网状态;member expired:会员撤销;auto expired:自然过期;expired:过期(包含手动过期与自动过期);member deleted:会员删除;modified:修改;new:新发;deleted:删除;TBD:to be delete;approved:审批通过;auditing:审核中;untread:审核不通过;     
     * @param String $status     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
    }
    
        	
    private $subject;
    
        /**
    * @return 商品标题，最多128个字符
    */
        public function getSubject() {
        return $this->subject;
    }
    
    /**
     * 设置商品标题，最多128个字符     
     * @param String $subject     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSubject( $subject) {
        $this->subject = $subject;
    }
    
        	
    private $description;
    
        /**
    * @return 商品详情描述，可包含图片中心的图片URL
    */
        public function getDescription() {
        return $this->description;
    }
    
    /**
     * 设置商品详情描述，可包含图片中心的图片URL     
     * @param String $description     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDescription( $description) {
        $this->description = $description;
    }
    
        	
    private $language;
    
        /**
    * @return 语种，参见FAQ 语种枚举值，1688网站默认传入CHINESE
    */
        public function getLanguage() {
        return $this->language;
    }
    
    /**
     * 设置语种，参见FAQ 语种枚举值，1688网站默认传入CHINESE     
     * @param String $language     
     * 参数示例：<pre>ENGLISH</pre>     
     * 此参数必填     */
    public function setLanguage( $language) {
        $this->language = $language;
    }
    
        	
    private $periodOfValidity;
    
        /**
    * @return 信息有效期，按天计算，国际站无此信息
    */
        public function getPeriodOfValidity() {
        return $this->periodOfValidity;
    }
    
    /**
     * 设置信息有效期，按天计算，国际站无此信息     
     * @param Integer $periodOfValidity     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPeriodOfValidity( $periodOfValidity) {
        $this->periodOfValidity = $periodOfValidity;
    }
    
        	
    private $bizType;
    
        /**
    * @return 业务类型。1：商品，2：加工，3：代理，4：合作，5：商务服务。国际站按默认商品。
    */
        public function getBizType() {
        return $this->bizType;
    }
    
    /**
     * 设置业务类型。1：商品，2：加工，3：代理，4：合作，5：商务服务。国际站按默认商品。     
     * @param Integer $bizType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBizType( $bizType) {
        $this->bizType = $bizType;
    }
    
        	
    private $pictureAuth;
    
        /**
    * @return 是否图片私密信息，国际站此字段无效
    */
        public function getPictureAuth() {
        return $this->pictureAuth;
    }
    
    /**
     * 设置是否图片私密信息，国际站此字段无效     
     * @param Boolean $pictureAuth     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPictureAuth( $pictureAuth) {
        $this->pictureAuth = $pictureAuth;
    }
    
        	
    private $image;
    
        /**
    * @return 商品主图
    */
        public function getImage() {
        return $this->image;
    }
    
    /**
     * 设置商品主图     
     * @param AlibabaProductProductImageInfo $image     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setImage(AlibabaProductProductImageInfo $image) {
        $this->image = $image;
    }
    
        	
    private $skuInfos;
    
        /**
    * @return sku信息
    */
        public function getSkuInfos() {
        return $this->skuInfos;
    }
    
    /**
     * 设置sku信息     
     * @param array include @see AlibabaProductProductSKUInfo[] $skuInfos     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSkuInfos(AlibabaProductProductSKUInfo $skuInfos) {
        $this->skuInfos = $skuInfos;
    }
    
        	
    private $saleInfo;
    
        /**
    * @return 商品销售信息
    */
        public function getSaleInfo() {
        return $this->saleInfo;
    }
    
    /**
     * 设置商品销售信息     
     * @param AlibabaProductProductSaleInfo $saleInfo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSaleInfo(AlibabaProductProductSaleInfo $saleInfo) {
        $this->saleInfo = $saleInfo;
    }
    
        	
    private $shippingInfo;
    
        /**
    * @return 商品物流信息
    */
        public function getShippingInfo() {
        return $this->shippingInfo;
    }
    
    /**
     * 设置商品物流信息     
     * @param AlibabaProductProductShippingInfo $shippingInfo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setShippingInfo(AlibabaProductProductShippingInfo $shippingInfo) {
        $this->shippingInfo = $shippingInfo;
    }
    
        	
    private $internationalTradeInfo;
    
        /**
    * @return 商品国际贸易信息，1688无需处理此字段
    */
        public function getInternationalTradeInfo() {
        return $this->internationalTradeInfo;
    }
    
    /**
     * 设置商品国际贸易信息，1688无需处理此字段     
     * @param AlibabaProductProductInternationalTradeInfo $internationalTradeInfo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInternationalTradeInfo(AlibabaProductProductInternationalTradeInfo $internationalTradeInfo) {
        $this->internationalTradeInfo = $internationalTradeInfo;
    }
    
        	
    private $extendInfos;
    
        /**
    * @return 商品扩展信息
    */
        public function getExtendInfos() {
        return $this->extendInfos;
    }
    
    /**
     * 设置商品扩展信息     
     * @param array include @see AlibabaProductProductExtendInfo[] $extendInfos     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setExtendInfos(AlibabaProductProductExtendInfo $extendInfos) {
        $this->extendInfos = $extendInfos;
    }
    
        	
    private $supplierUserId;
    
        /**
    * @return 供应商用户ID
    */
        public function getSupplierUserId() {
        return $this->supplierUserId;
    }
    
    /**
     * 设置供应商用户ID     
     * @param String $supplierUserId     
     * 参数示例：<pre>12345</pre>     
     * 此参数必填     */
    public function setSupplierUserId( $supplierUserId) {
        $this->supplierUserId = $supplierUserId;
    }
    
        	
    private $qualityLevel;
    
        /**
    * @return 质量星级(0-5)
    */
        public function getQualityLevel() {
        return $this->qualityLevel;
    }
    
    /**
     * 设置质量星级(0-5)     
     * @param Integer $qualityLevel     
     * 参数示例：<pre>5</pre>     
     * 此参数必填     */
    public function setQualityLevel( $qualityLevel) {
        $this->qualityLevel = $qualityLevel;
    }
    
        	
    private $supplierLoginId;
    
        /**
    * @return 供应商loginId
    */
        public function getSupplierLoginId() {
        return $this->supplierLoginId;
    }
    
    /**
     * 设置供应商loginId     
     * @param String $supplierLoginId     
     * 参数示例：<pre>test</pre>     
     * 此参数必填     */
    public function setSupplierLoginId( $supplierLoginId) {
        $this->supplierLoginId = $supplierLoginId;
    }
    
        	
    private $categoryName;
    
        /**
    * @return 类目名
    */
        public function getCategoryName() {
        return $this->categoryName;
    }
    
    /**
     * 设置类目名     
     * @param String $categoryName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCategoryName( $categoryName) {
        $this->categoryName = $categoryName;
    }
    
        	
    private $mainVedio;
    
        /**
    * @return 主图视频播放地址
    */
        public function getMainVedio() {
        return $this->mainVedio;
    }
    
    /**
     * 设置主图视频播放地址     
     * @param String $mainVedio     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMainVedio( $mainVedio) {
        $this->mainVedio = $mainVedio;
    }
    
        	
    private $productCargoNumber;
    
        /**
    * @return 商品货号，产品属性中的货号
    */
        public function getProductCargoNumber() {
        return $this->productCargoNumber;
    }
    
    /**
     * 设置商品货号，产品属性中的货号     
     * @param String $productCargoNumber     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductCargoNumber( $productCargoNumber) {
        $this->productCargoNumber = $productCargoNumber;
    }
    
        	
    private $crossBorderOffer;
    
        /**
    * @return 是否海外代发
    */
        public function getCrossBorderOffer() {
        return $this->crossBorderOffer;
    }
    
    /**
     * 设置是否海外代发     
     * @param Boolean $crossBorderOffer     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCrossBorderOffer( $crossBorderOffer) {
        $this->crossBorderOffer = $crossBorderOffer;
    }
    
        	
    private $referencePrice;
    
        /**
    * @return 参考价格，返回价格区间，可能为空
    */
        public function getReferencePrice() {
        return $this->referencePrice;
    }
    
    /**
     * 设置参考价格，返回价格区间，可能为空     
     * @param String $referencePrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setReferencePrice( $referencePrice) {
        $this->referencePrice = $referencePrice;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "productID", $this->stdResult )) {
    				$this->productID = $this->stdResult->{"productID"};
    			}
    			    		    				    			    			if (array_key_exists ( "productType", $this->stdResult )) {
    				$this->productType = $this->stdResult->{"productType"};
    			}
    			    		    				    			    			if (array_key_exists ( "categoryID", $this->stdResult )) {
    				$this->categoryID = $this->stdResult->{"categoryID"};
    			}
    			    		    				    			    			if (array_key_exists ( "attributes", $this->stdResult )) {
    			$attributesResult=$this->stdResult->{"attributes"};
    				$object = json_decode ( json_encode ( $attributesResult ), true );
					$this->attributes = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaProductProductAttributeResult=new AlibabaProductProductAttribute();
						$AlibabaProductProductAttributeResult->setArrayResult($arrayobject );
						$this->attributes [$i] = $AlibabaProductProductAttributeResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "groupID", $this->stdResult )) {
    				$this->groupID = $this->stdResult->{"groupID"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
    			}
    			    		    				    			    			if (array_key_exists ( "subject", $this->stdResult )) {
    				$this->subject = $this->stdResult->{"subject"};
    			}
    			    		    				    			    			if (array_key_exists ( "description", $this->stdResult )) {
    				$this->description = $this->stdResult->{"description"};
    			}
    			    		    				    			    			if (array_key_exists ( "language", $this->stdResult )) {
    				$this->language = $this->stdResult->{"language"};
    			}
    			    		    				    			    			if (array_key_exists ( "periodOfValidity", $this->stdResult )) {
    				$this->periodOfValidity = $this->stdResult->{"periodOfValidity"};
    			}
    			    		    				    			    			if (array_key_exists ( "bizType", $this->stdResult )) {
    				$this->bizType = $this->stdResult->{"bizType"};
    			}
    			    		    				    			    			if (array_key_exists ( "pictureAuth", $this->stdResult )) {
    				$this->pictureAuth = $this->stdResult->{"pictureAuth"};
    			}
    			    		    				    			    			if (array_key_exists ( "image", $this->stdResult )) {
    				$imageResult=$this->stdResult->{"image"};
    				$this->image = new AlibabaProductProductImageInfo();
    				$this->image->setStdResult ( $imageResult);
    			}
    			    		    				    			    			if (array_key_exists ( "skuInfos", $this->stdResult )) {
    			$skuInfosResult=$this->stdResult->{"skuInfos"};
    				$object = json_decode ( json_encode ( $skuInfosResult ), true );
					$this->skuInfos = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaProductProductSKUInfoResult=new AlibabaProductProductSKUInfo();
						$AlibabaProductProductSKUInfoResult->setArrayResult($arrayobject );
						$this->skuInfos [$i] = $AlibabaProductProductSKUInfoResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "saleInfo", $this->stdResult )) {
    				$saleInfoResult=$this->stdResult->{"saleInfo"};
    				$this->saleInfo = new AlibabaProductProductSaleInfo();
    				$this->saleInfo->setStdResult ( $saleInfoResult);
    			}
    			    		    				    			    			if (array_key_exists ( "shippingInfo", $this->stdResult )) {
    				$shippingInfoResult=$this->stdResult->{"shippingInfo"};
    				$this->shippingInfo = new AlibabaProductProductShippingInfo();
    				$this->shippingInfo->setStdResult ( $shippingInfoResult);
    			}
    			    		    				    			    			if (array_key_exists ( "internationalTradeInfo", $this->stdResult )) {
    				$internationalTradeInfoResult=$this->stdResult->{"internationalTradeInfo"};
    				$this->internationalTradeInfo = new AlibabaProductProductInternationalTradeInfo();
    				$this->internationalTradeInfo->setStdResult ( $internationalTradeInfoResult);
    			}
    			    		    				    			    			if (array_key_exists ( "extendInfos", $this->stdResult )) {
    			$extendInfosResult=$this->stdResult->{"extendInfos"};
    				$object = json_decode ( json_encode ( $extendInfosResult ), true );
					$this->extendInfos = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaProductProductExtendInfoResult=new AlibabaProductProductExtendInfo();
						$AlibabaProductProductExtendInfoResult->setArrayResult($arrayobject );
						$this->extendInfos [$i] = $AlibabaProductProductExtendInfoResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "supplierUserId", $this->stdResult )) {
    				$this->supplierUserId = $this->stdResult->{"supplierUserId"};
    			}
    			    		    				    			    			if (array_key_exists ( "qualityLevel", $this->stdResult )) {
    				$this->qualityLevel = $this->stdResult->{"qualityLevel"};
    			}
    			    		    				    			    			if (array_key_exists ( "supplierLoginId", $this->stdResult )) {
    				$this->supplierLoginId = $this->stdResult->{"supplierLoginId"};
    			}
    			    		    				    			    			if (array_key_exists ( "categoryName", $this->stdResult )) {
    				$this->categoryName = $this->stdResult->{"categoryName"};
    			}
    			    		    				    			    			if (array_key_exists ( "mainVedio", $this->stdResult )) {
    				$this->mainVedio = $this->stdResult->{"mainVedio"};
    			}
    			    		    				    			    			if (array_key_exists ( "productCargoNumber", $this->stdResult )) {
    				$this->productCargoNumber = $this->stdResult->{"productCargoNumber"};
    			}
    			    		    				    			    			if (array_key_exists ( "crossBorderOffer", $this->stdResult )) {
    				$this->crossBorderOffer = $this->stdResult->{"crossBorderOffer"};
    			}
    			    		    				    			    			if (array_key_exists ( "referencePrice", $this->stdResult )) {
    				$this->referencePrice = $this->stdResult->{"referencePrice"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "productID", $this->arrayResult )) {
    			$this->productID = $arrayResult['productID'];
    			}
    		    	    			    		    			if (array_key_exists ( "productType", $this->arrayResult )) {
    			$this->productType = $arrayResult['productType'];
    			}
    		    	    			    		    			if (array_key_exists ( "categoryID", $this->arrayResult )) {
    			$this->categoryID = $arrayResult['categoryID'];
    			}
    		    	    			    		    		if (array_key_exists ( "attributes", $this->arrayResult )) {
    		$attributesResult=$arrayResult['attributes'];
    			$this->attributes = new AlibabaProductProductAttribute();
    			$this->attributes->setStdResult ( $attributesResult);
    		}
    		    	    			    		    			if (array_key_exists ( "groupID", $this->arrayResult )) {
    			$this->groupID = $arrayResult['groupID'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['status'];
    			}
    		    	    			    		    			if (array_key_exists ( "subject", $this->arrayResult )) {
    			$this->subject = $arrayResult['subject'];
    			}
    		    	    			    		    			if (array_key_exists ( "description", $this->arrayResult )) {
    			$this->description = $arrayResult['description'];
    			}
    		    	    			    		    			if (array_key_exists ( "language", $this->arrayResult )) {
    			$this->language = $arrayResult['language'];
    			}
    		    	    			    		    			if (array_key_exists ( "periodOfValidity", $this->arrayResult )) {
    			$this->periodOfValidity = $arrayResult['periodOfValidity'];
    			}
    		    	    			    		    			if (array_key_exists ( "bizType", $this->arrayResult )) {
    			$this->bizType = $arrayResult['bizType'];
    			}
    		    	    			    		    			if (array_key_exists ( "pictureAuth", $this->arrayResult )) {
    			$this->pictureAuth = $arrayResult['pictureAuth'];
    			}
    		    	    			    		    		if (array_key_exists ( "image", $this->arrayResult )) {
    		$imageResult=$arrayResult['image'];
    			    			$this->image = new AlibabaProductProductImageInfo();
    			    			$this->image->setStdResult ( $imageResult);
    		}
    		    	    			    		    		if (array_key_exists ( "skuInfos", $this->arrayResult )) {
    		$skuInfosResult=$arrayResult['skuInfos'];
    			$this->skuInfos = new AlibabaProductProductSKUInfo();
    			$this->skuInfos->setStdResult ( $skuInfosResult);
    		}
    		    	    			    		    		if (array_key_exists ( "saleInfo", $this->arrayResult )) {
    		$saleInfoResult=$arrayResult['saleInfo'];
    			    			$this->saleInfo = new AlibabaProductProductSaleInfo();
    			    			$this->saleInfo->setStdResult ( $saleInfoResult);
    		}
    		    	    			    		    		if (array_key_exists ( "shippingInfo", $this->arrayResult )) {
    		$shippingInfoResult=$arrayResult['shippingInfo'];
    			    			$this->shippingInfo = new AlibabaProductProductShippingInfo();
    			    			$this->shippingInfo->setStdResult ( $shippingInfoResult);
    		}
    		    	    			    		    		if (array_key_exists ( "internationalTradeInfo", $this->arrayResult )) {
    		$internationalTradeInfoResult=$arrayResult['internationalTradeInfo'];
    			    			$this->internationalTradeInfo = new AlibabaProductProductInternationalTradeInfo();
    			    			$this->internationalTradeInfo->setStdResult ( $internationalTradeInfoResult);
    		}
    		    	    			    		    		if (array_key_exists ( "extendInfos", $this->arrayResult )) {
    		$extendInfosResult=$arrayResult['extendInfos'];
    			$this->extendInfos = new AlibabaProductProductExtendInfo();
    			$this->extendInfos->setStdResult ( $extendInfosResult);
    		}
    		    	    			    		    			if (array_key_exists ( "supplierUserId", $this->arrayResult )) {
    			$this->supplierUserId = $arrayResult['supplierUserId'];
    			}
    		    	    			    		    			if (array_key_exists ( "qualityLevel", $this->arrayResult )) {
    			$this->qualityLevel = $arrayResult['qualityLevel'];
    			}
    		    	    			    		    			if (array_key_exists ( "supplierLoginId", $this->arrayResult )) {
    			$this->supplierLoginId = $arrayResult['supplierLoginId'];
    			}
    		    	    			    		    			if (array_key_exists ( "categoryName", $this->arrayResult )) {
    			$this->categoryName = $arrayResult['categoryName'];
    			}
    		    	    			    		    			if (array_key_exists ( "mainVedio", $this->arrayResult )) {
    			$this->mainVedio = $arrayResult['mainVedio'];
    			}
    		    	    			    		    			if (array_key_exists ( "productCargoNumber", $this->arrayResult )) {
    			$this->productCargoNumber = $arrayResult['productCargoNumber'];
    			}
    		    	    			    		    			if (array_key_exists ( "crossBorderOffer", $this->arrayResult )) {
    			$this->crossBorderOffer = $arrayResult['crossBorderOffer'];
    			}
    		    	    			    		    			if (array_key_exists ( "referencePrice", $this->arrayResult )) {
    			$this->referencePrice = $arrayResult['referencePrice'];
    			}
    		    	    		}
 
   
}
?>