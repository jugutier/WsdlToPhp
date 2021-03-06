<?php
/**
 * ClassMap 
 * @date 08/07/2012
 */
/**
 * ClassMap
 * @date 08/07/2012
 */
class XiRealTimeClassMap
{
	final public static function classMap()
	{
		return array (
  'GetHistoricalTicksAsOfDate' => 'XiRealTimeTypeGetHistoricalTicksAsOfDate',
  'GetHistoricalTicksAsOfDateResponse' => 'XiRealTimeTypeGetHistoricalTicksAsOfDateResponse',
  'Ticks' => 'XiRealTimeTypeTicks',
  'Common' => 'XiRealTimeTypeCommon',
  'ArrayOfTick' => 'XiRealTimeTypeArrayOfTick',
  'Tick' => 'XiRealTimeTypeTick',
  'Header' => 'XiRealTimeTypeHeader',
  'GetRealChartPreset' => 'XiRealTimeTypeGetRealChartPreset',
  'GetRealChartPresetResponse' => 'XiRealTimeTypeGetRealChartPresetResponse',
  'IntradayChart' => 'XiRealTimeTypeIntradayChart',
  'StockChart' => 'XiRealTimeTypeStockChart',
  'ChartDesign' => 'XiRealTimeTypeChartDesign',
  'Security' => 'XiRealTimeTypeSecurity',
  'GetRealChart' => 'XiRealTimeTypeGetRealChart',
  'GetRealChartResponse' => 'XiRealTimeTypeGetRealChartResponse',
  'GetRealChartCustom' => 'XiRealTimeTypeGetRealChartCustom',
  'GetRealChartCustomResponse' => 'XiRealTimeTypeGetRealChartCustomResponse',
  'GetChartDesign' => 'XiRealTimeTypeGetChartDesign',
  'GetChartDesignResponse' => 'XiRealTimeTypeGetChartDesignResponse',
  'GetRealQuote' => 'XiRealTimeTypeGetRealQuote',
  'GetRealQuoteResponse' => 'XiRealTimeTypeGetRealQuoteResponse',
  'RealTimeQuote' => 'XiRealTimeTypeRealTimeQuote',
  'GetRealQuoteByIdentifier' => 'XiRealTimeTypeGetRealQuoteByIdentifier',
  'GetRealQuoteByIdentifierResponse' => 'XiRealTimeTypeGetRealQuoteByIdentifierResponse',
  'GetExtendedRealQuote' => 'XiRealTimeTypeGetExtendedRealQuote',
  'GetExtendedRealQuoteResponse' => 'XiRealTimeTypeGetExtendedRealQuoteResponse',
  'ExtendedRealTimeQuote' => 'XiRealTimeTypeExtendedRealTimeQuote',
  'GetRealQuotes' => 'XiRealTimeTypeGetRealQuotes',
  'GetRealQuotesResponse' => 'XiRealTimeTypeGetRealQuotesResponse',
  'ArrayOfRealTimeQuote' => 'XiRealTimeTypeArrayOfRealTimeQuote',
  'GetExtendedRealQuotes' => 'XiRealTimeTypeGetExtendedRealQuotes',
  'GetExtendedRealQuotesResponse' => 'XiRealTimeTypeGetExtendedRealQuotesResponse',
  'ArrayOfExtendedRealTimeQuote' => 'XiRealTimeTypeArrayOfExtendedRealTimeQuote',
  'GetRealQuotesTicker' => 'XiRealTimeTypeGetRealQuotesTicker',
  'GetRealQuotesTickerResponse' => 'XiRealTimeTypeGetRealQuotesTickerResponse',
  'TickerTape' => 'XiRealTimeTypeTickerTape',
  'GetTick' => 'XiRealTimeTypeGetTick',
  'GetTickResponse' => 'XiRealTimeTypeGetTickResponse',
  'SingleTick' => 'XiRealTimeTypeSingleTick',
  'GetTicks' => 'XiRealTimeTypeGetTicks',
  'GetTicksResponse' => 'XiRealTimeTypeGetTicksResponse',
  'GetTickCollections' => 'XiRealTimeTypeGetTickCollections',
  'GetTickCollectionsResponse' => 'XiRealTimeTypeGetTickCollectionsResponse',
  'ArrayOfTicks' => 'XiRealTimeTypeArrayOfTicks',
  'GetHistoricalTicks' => 'XiRealTimeTypeGetHistoricalTicks',
  'GetHistoricalTicksResponse' => 'XiRealTimeTypeGetHistoricalTicksResponse',
  'IsTraded' => 'XiRealTimeTypeIsTraded',
  'IsTradedResponse' => 'XiRealTimeTypeIsTradedResponse',
  'BooleanResult' => 'XiRealTimeTypeBooleanResult',
  'GetBook' => 'XiRealTimeTypeGetBook',
  'GetBookResponse' => 'XiRealTimeTypeGetBookResponse',
  'Book' => 'XiRealTimeTypeBook',
  'ArrayOfOrderSummary' => 'XiRealTimeTypeArrayOfOrderSummary',
  'OrderSummary' => 'XiRealTimeTypeOrderSummary',
  'GetBookDetails' => 'XiRealTimeTypeGetBookDetails',
  'GetBookDetailsResponse' => 'XiRealTimeTypeGetBookDetailsResponse',
  'DetailedBook' => 'XiRealTimeTypeDetailedBook',
  'ArrayOfOrder' => 'XiRealTimeTypeArrayOfOrder',
  'Order' => 'XiRealTimeTypeOrder',
  'SearchByMarketCap' => 'XiRealTimeTypeSearchByMarketCap',
  'SearchByMarketCapResponse' => 'XiRealTimeTypeSearchByMarketCapResponse',
  'ArrayOfSearchResult' => 'XiRealTimeTypeArrayOfSearchResult',
  'SearchResult' => 'XiRealTimeTypeSearchResult',
  'GetRealTopMovers' => 'XiRealTimeTypeGetRealTopMovers',
  'GetRealTopMoversResponse' => 'XiRealTimeTypeGetRealTopMoversResponse',
  'Top' => 'XiRealTimeTypeTop',
  'GetRealTopGainers' => 'XiRealTimeTypeGetRealTopGainers',
  'GetRealTopGainersResponse' => 'XiRealTimeTypeGetRealTopGainersResponse',
  'GetRealTopLosers' => 'XiRealTimeTypeGetRealTopLosers',
  'GetRealTopLosersResponse' => 'XiRealTimeTypeGetRealTopLosersResponse',
  'GetRealTop' => 'XiRealTimeTypeGetRealTop',
  'GetRealTopResponse' => 'XiRealTimeTypeGetRealTopResponse',
  'ArrayOfTop' => 'XiRealTimeTypeArrayOfTop',
  'GetExchangeTime' => 'XiRealTimeTypeGetExchangeTime',
  'GetExchangeTimeResponse' => 'XiRealTimeTypeGetExchangeTimeResponse',
  'ExchangeTime' => 'XiRealTimeTypeExchangeTime',
  'ECNTypes' => 'XiRealTimeTypeECNTypes',
  'StockChartStyles' => 'XiRealTimeTypeStockChartStyles',
  'OutcomeTypes' => 'XiRealTimeTypeOutcomeTypes',
  'LinePattern' => 'XiRealTimeTypeLinePattern',
  'ImageFrameType' => 'XiRealTimeTypeImageFrameType',
  'PredefinedProjection' => 'XiRealTimeTypePredefinedProjection',
  'TickPeriod' => 'XiRealTimeTypeTickPeriod',
  'HorzAlign' => 'XiRealTimeTypeHorzAlign',
  'PredefinedLightModel' => 'XiRealTimeTypePredefinedLightModel',
  'IdentifierTypes' => 'XiRealTimeTypeIdentifierTypes',
  'OrderTypes' => 'XiRealTimeTypeOrderTypes',
  'DirectionTypes' => 'XiRealTimeTypeDirectionTypes',
  'HistoricalPeriods' => 'XiRealTimeTypeHistoricalPeriods',
  'TopTypes' => 'XiRealTimeTypeTopTypes',
);
	}
}
?>