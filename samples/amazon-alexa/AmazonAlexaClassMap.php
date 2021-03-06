<?php
/**
 * ClassMap 
 * @date 10/07/2012
 */
/**
 * ClassMap
 * @date 10/07/2012
 */
class AmazonAlexaClassMap
{
	final public static function classMap()
	{
		return array (
  'MultiOperation' => 'AmazonAlexaTypeMultiOperation',
  'MultiOperationResponse' => 'AmazonAlexaTypeMultiOperationResponse',
  'Information' => 'AmazonAlexaTypeInformation',
  'OperationInformation' => 'AmazonAlexaTypeOperationInformation',
  'RequiredParameters' => 'AmazonAlexaTypeRequiredParameters',
  'AvailableParameters' => 'AmazonAlexaTypeAvailableParameters',
  'DefaultResponseGroups' => 'AmazonAlexaTypeDefaultResponseGroups',
  'AvailableResponseGroups' => 'AmazonAlexaTypeAvailableResponseGroups',
  'ResponseGroupInformation' => 'AmazonAlexaTypeResponseGroupInformation',
  'ValidOperations' => 'AmazonAlexaTypeValidOperations',
  'Elements' => 'AmazonAlexaTypeElements',
  'CategoryBrowse' => 'AmazonAlexaTypeCategoryBrowse',
  'CategoryBrowseRequest' => 'AmazonAlexaTypeCategoryBrowseRequest',
  'Security' => 'AmazonAlexaTypeSecurity',
  'CategoryBrowseResult' => 'AmazonAlexaTypeCategoryBrowseResult',
  'CategoryBrowseResponse' => 'AmazonAlexaTypeCategoryBrowseResponse',
  'Response' => 'AmazonAlexaTypeResponse',
  'CategoryListings' => 'AmazonAlexaTypeCategoryListings',
  'CategoryListingsRequest' => 'AmazonAlexaTypeCategoryListingsRequest',
  'CategoryListingsResult' => 'AmazonAlexaTypeCategoryListingsResult',
  'CategoryListingsResponse' => 'AmazonAlexaTypeCategoryListingsResponse',
  'Crawl' => 'AmazonAlexaTypeCrawl',
  'CrawlRequest' => 'AmazonAlexaTypeCrawlRequest',
  'CrawlResult' => 'AmazonAlexaTypeCrawlResult',
  'CrawlResponse' => 'AmazonAlexaTypeCrawlResponse',
  'SitesLinkingIn' => 'AmazonAlexaTypeSitesLinkingIn',
  'SitesLinkingInRequest' => 'AmazonAlexaTypeSitesLinkingInRequest',
  'SitesLinkingInResult' => 'AmazonAlexaTypeSitesLinkingInResult',
  'SitesLinkingInResponse' => 'AmazonAlexaTypeSitesLinkingInResponse',
  'TrafficHistory' => 'AmazonAlexaTypeTrafficHistory',
  'TrafficHistoryRequest' => 'AmazonAlexaTypeTrafficHistoryRequest',
  'TrafficHistoryResult' => 'AmazonAlexaTypeTrafficHistoryResult',
  'TrafficHistoryResponse' => 'AmazonAlexaTypeTrafficHistoryResponse',
  'UrlInfo' => 'AmazonAlexaTypeUrlInfo',
  'UrlInfoRequest' => 'AmazonAlexaTypeUrlInfoRequest',
  'UrlInfoResult' => 'AmazonAlexaTypeUrlInfoResult',
  'UrlInfoResponse' => 'AmazonAlexaTypeUrlInfoResponse',
  'WebMap' => 'AmazonAlexaTypeWebMap',
  'WebMapRequest' => 'AmazonAlexaTypeWebMapRequest',
  'WebMapResult' => 'AmazonAlexaTypeWebMapResult',
  'WebMapResponse' => 'AmazonAlexaTypeWebMapResponse',
  'OperationRequest' => 'AmazonAlexaTypeOperationRequest',
  'Request' => 'AmazonAlexaTypeRequest',
  'Arguments' => 'AmazonAlexaTypeArguments',
  'Argument' => 'AmazonAlexaTypeArgument',
  'HTTPHeaders' => 'AmazonAlexaTypeHTTPHeaders',
  'Header' => 'AmazonAlexaTypeHeader',
  'Errors' => 'AmazonAlexaTypeErrors',
  'Error' => 'AmazonAlexaTypeError',
  'ResponseStatus' => 'AmazonAlexaTypeResponseStatus',
  'Alexa' => 'AmazonAlexaTypeAlexa',
  'WebMapData' => 'AmazonAlexaTypeWebMapData',
  'AlexaBatch' => 'AmazonAlexaTypeAlexaBatch',
  'AttributeType' => 'AmazonAlexaTypeAttributeType',
  'ContactInfoType' => 'AmazonAlexaTypeContactInfoType',
  'PhoneNumbers' => 'AmazonAlexaTypePhoneNumbers',
  'PhysicalAddress' => 'AmazonAlexaTypePhysicalAddress',
  'CompanyStockTicker' => 'AmazonAlexaTypeCompanyStockTicker',
  'ContentDataType' => 'AmazonAlexaTypeContentDataType',
  'ErrorType' => 'AmazonAlexaTypeErrorType',
  'GenericDataType' => 'AmazonAlexaTypeGenericDataType',
  'LanguageType' => 'AmazonAlexaTypeLanguageType',
  'PhoneNumberType' => 'AmazonAlexaTypePhoneNumberType',
  'PhysicalAddressType' => 'AmazonAlexaTypePhysicalAddressType',
  'Streets' => 'AmazonAlexaTypeStreets',
  'RelatedLinkType' => 'AmazonAlexaTypeRelatedLinkType',
  'RelatedType' => 'AmazonAlexaTypeRelatedType',
  'RelatedLinks' => 'AmazonAlexaTypeRelatedLinks',
  'Categories' => 'AmazonAlexaTypeCategories',
  'CategoryData' => 'AmazonAlexaTypeCategoryData',
  'RequestType' => 'AmazonAlexaTypeRequestType',
  'SpeedType' => 'AmazonAlexaTypeSpeedType',
  'TrafficStatType' => 'AmazonAlexaTypeTrafficStatType',
  'TrafficDataType' => 'AmazonAlexaTypeTrafficDataType',
  'RankByCountry' => 'AmazonAlexaTypeRankByCountry',
  'Country' => 'AmazonAlexaTypeCountry',
  'Contribution' => 'AmazonAlexaTypeContribution',
  'RankByCity' => 'AmazonAlexaTypeRankByCity',
  'City' => 'AmazonAlexaTypeCity',
  'PerUser' => 'AmazonAlexaTypePerUser',
  'ContributingSubdomains' => 'AmazonAlexaTypeContributingSubdomains',
  'UsageStatistics' => 'AmazonAlexaTypeUsageStatistics',
  'UrlServiceType' => 'AmazonAlexaTypeUrlServiceType',
  'DataUrl' => 'AmazonAlexaTypeDataUrl',
  'UsageStatisticType' => 'AmazonAlexaTypeUsageStatisticType',
  'Reach' => 'AmazonAlexaTypeReach',
  'PageViews' => 'AmazonAlexaTypePageViews',
  'WebMapSubType' => 'AmazonAlexaTypeWebMapSubType',
  'Results' => 'AmazonAlexaTypeResults',
  'Result' => 'AmazonAlexaTypeResult',
  'CategoriesType' => 'AmazonAlexaTypeCategoriesType',
  'CategoryType' => 'AmazonAlexaTypeCategoryType',
  'ListingsType' => 'AmazonAlexaTypeListingsType',
  'ListingType' => 'AmazonAlexaTypeListingType',
  'ContributingSiteType' => 'AmazonAlexaTypeContributingSiteType',
  'TimeRange' => 'AmazonAlexaTypeTimeRange',
  'CrawlType' => 'AmazonAlexaTypeCrawlType',
  'MetaData' => 'AmazonAlexaTypeMetaData',
  'RequestInfo' => 'AmazonAlexaTypeRequestInfo',
  'Checksums' => 'AmazonAlexaTypeChecksums',
  'OtherUrls' => 'AmazonAlexaTypeOtherUrls',
  'OtherUrl' => 'AmazonAlexaTypeOtherUrl',
  'Images' => 'AmazonAlexaTypeImages',
  'Links' => 'AmazonAlexaTypeLinks',
  'Link' => 'AmazonAlexaTypeLink',
  'Index' => 'AmazonAlexaTypeIndex',
  'Offsets' => 'AmazonAlexaTypeOffsets',
  'SitesLinkingInType' => 'AmazonAlexaTypeSitesLinkingInType',
  'Site' => 'AmazonAlexaTypeSite',
  'TrafficHistoryType' => 'AmazonAlexaTypeTrafficHistoryType',
  'HistoricalData' => 'AmazonAlexaTypeHistoricalData',
  'Data' => 'AmazonAlexaTypeData',
  'TimeRangeType' => 'AmazonAlexaTypeTimeRangeType',
  'AccountType' => 'AmazonAlexaTypeAccountType',
  'ResponseType' => 'AmazonAlexaTypeResponseType',
  'CategoryBrowseType' => 'AmazonAlexaTypeCategoryBrowseType',
  'DataUrlType' => 'AmazonAlexaTypeDataUrlType',
  'CategoryListingsType' => 'AmazonAlexaTypeCategoryListingsType',
  'SiteDataType' => 'AmazonAlexaTypeSiteDataType',
  'KeywordsType' => 'AmazonAlexaTypeKeywordsType',
  'OwnedDomainsType' => 'AmazonAlexaTypeOwnedDomainsType',
  'OwnedDomainType' => 'AmazonAlexaTypeOwnedDomainType',
  'LetterBarsType' => 'AmazonAlexaTypeLetterBarsType',
);
	}
}
?>