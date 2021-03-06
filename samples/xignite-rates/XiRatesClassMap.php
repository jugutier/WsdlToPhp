<?php
/**
 * ClassMap 
 * @date 08/07/2012
 */
/**
 * ClassMap
 * @date 08/07/2012
 */
class XiRatesClassMap
{
	final public static function classMap()
	{
		return array (
  'GetLIBORSecure' => 'XiRatesTypeGetLIBORSecure',
  'GetLIBORSecureResponse' => 'XiRatesTypeGetLIBORSecureResponse',
  'LIBORRate' => 'XiRatesTypeLIBORRate',
  'Common' => 'XiRatesTypeCommon',
  'RateDescription' => 'XiRatesTypeRateDescription',
  'Header' => 'XiRatesTypeHeader',
  'GetLIBOR' => 'XiRatesTypeGetLIBOR',
  'GetLIBORResponse' => 'XiRatesTypeGetLIBORResponse',
  'GetStateRate' => 'XiRatesTypeGetStateRate',
  'GetStateRateResponse' => 'XiRatesTypeGetStateRateResponse',
  'InterestRate' => 'XiRatesTypeInterestRate',
  'GetStateRates' => 'XiRatesTypeGetStateRates',
  'GetStateRatesResponse' => 'XiRatesTypeGetStateRatesResponse',
  'ArrayOfInterestRate' => 'XiRatesTypeArrayOfInterestRate',
  'GetFederalRate' => 'XiRatesTypeGetFederalRate',
  'GetFederalRateResponse' => 'XiRatesTypeGetFederalRateResponse',
  'GetFederalRates' => 'XiRatesTypeGetFederalRates',
  'GetFederalRatesResponse' => 'XiRatesTypeGetFederalRatesResponse',
  'GetForwardRateAgreement' => 'XiRatesTypeGetForwardRateAgreement',
  'GetForwardRateAgreementResponse' => 'XiRatesTypeGetForwardRateAgreementResponse',
  'ForwardRateAgreement' => 'XiRatesTypeForwardRateAgreement',
  'GetEuroDollarFRAStrip' => 'XiRatesTypeGetEuroDollarFRAStrip',
  'GetEuroDollarFRAStripResponse' => 'XiRatesTypeGetEuroDollarFRAStripResponse',
  'ArrayOfEuroDollarFRA' => 'XiRatesTypeArrayOfEuroDollarFRA',
  'EuroDollarFRA' => 'XiRatesTypeEuroDollarFRA',
  'GetSwapRate' => 'XiRatesTypeGetSwapRate',
  'GetSwapRateResponse' => 'XiRatesTypeGetSwapRateResponse',
  'SwapRate' => 'XiRatesTypeSwapRate',
  'GetSwapRateFamily' => 'XiRatesTypeGetSwapRateFamily',
  'GetSwapRateFamilyResponse' => 'XiRatesTypeGetSwapRateFamilyResponse',
  'ArrayOfSwapRate' => 'XiRatesTypeArrayOfSwapRate',
  'GetHistoricalSwapRate' => 'XiRatesTypeGetHistoricalSwapRate',
  'GetHistoricalSwapRateResponse' => 'XiRatesTypeGetHistoricalSwapRateResponse',
  'GetHistoricalSwapRateRange' => 'XiRatesTypeGetHistoricalSwapRateRange',
  'GetHistoricalSwapRateRangeResponse' => 'XiRatesTypeGetHistoricalSwapRateRangeResponse',
  'GetREIBOR' => 'XiRatesTypeGetREIBOR',
  'GetREIBORResponse' => 'XiRatesTypeGetREIBORResponse',
  'REIBORRate' => 'XiRatesTypeREIBORRate',
  'GetHIBOR' => 'XiRatesTypeGetHIBOR',
  'GetHIBORResponse' => 'XiRatesTypeGetHIBORResponse',
  'HIBORRate' => 'XiRatesTypeHIBORRate',
  'GetSOFIBOR' => 'XiRatesTypeGetSOFIBOR',
  'GetSOFIBORResponse' => 'XiRatesTypeGetSOFIBORResponse',
  'SOFIBORRate' => 'XiRatesTypeSOFIBORRate',
  'GetREIBID' => 'XiRatesTypeGetREIBID',
  'GetREIBIDResponse' => 'XiRatesTypeGetREIBIDResponse',
  'REIBIDRate' => 'XiRatesTypeREIBIDRate',
  'GetOIBOR' => 'XiRatesTypeGetOIBOR',
  'GetOIBORResponse' => 'XiRatesTypeGetOIBORResponse',
  'OIBORRate' => 'XiRatesTypeOIBORRate',
  'GetSIBOR' => 'XiRatesTypeGetSIBOR',
  'GetSIBORResponse' => 'XiRatesTypeGetSIBORResponse',
  'SIBORRate' => 'XiRatesTypeSIBORRate',
  'GetCIBOR' => 'XiRatesTypeGetCIBOR',
  'GetCIBORResponse' => 'XiRatesTypeGetCIBORResponse',
  'CIBORRate' => 'XiRatesTypeCIBORRate',
  'GetSTIBOR' => 'XiRatesTypeGetSTIBOR',
  'GetSTIBORResponse' => 'XiRatesTypeGetSTIBORResponse',
  'STIBORRate' => 'XiRatesTypeSTIBORRate',
  'GetVILIBOR' => 'XiRatesTypeGetVILIBOR',
  'GetVILIBORResponse' => 'XiRatesTypeGetVILIBORResponse',
  'VILIBORRate' => 'XiRatesTypeVILIBORRate',
  'GetWIBOR' => 'XiRatesTypeGetWIBOR',
  'GetWIBORResponse' => 'XiRatesTypeGetWIBORResponse',
  'WIBORRate' => 'XiRatesTypeWIBORRate',
  'GetEURIBOR' => 'XiRatesTypeGetEURIBOR',
  'GetEURIBORResponse' => 'XiRatesTypeGetEURIBORResponse',
  'EURIBORRate' => 'XiRatesTypeEURIBORRate',
  'GetHistoricalLIBOR' => 'XiRatesTypeGetHistoricalLIBOR',
  'GetHistoricalLIBORResponse' => 'XiRatesTypeGetHistoricalLIBORResponse',
  'HistoricalLIBORRates' => 'XiRatesTypeHistoricalLIBORRates',
  'ArrayOfRate' => 'XiRatesTypeArrayOfRate',
  'Rate' => 'XiRatesTypeRate',
  'GetWSJRate' => 'XiRatesTypeGetWSJRate',
  'GetWSJRateResponse' => 'XiRatesTypeGetWSJRateResponse',
  'WSJInterestRate' => 'XiRatesTypeWSJInterestRate',
  'GetTelerate3750' => 'XiRatesTypeGetTelerate3750',
  'GetTelerate3750Response' => 'XiRatesTypeGetTelerate3750Response',
  'Telerate3750' => 'XiRatesTypeTelerate3750',
  'ArrayOfTelerate3750Column' => 'XiRatesTypeArrayOfTelerate3750Column',
  'Telerate3750Column' => 'XiRatesTypeTelerate3750Column',
  'ArrayOfLIBORRate' => 'XiRatesTypeArrayOfLIBORRate',
  'GetLastLondonFixing' => 'XiRatesTypeGetLastLondonFixing',
  'GetLastLondonFixingResponse' => 'XiRatesTypeGetLastLondonFixingResponse',
  'LondonFixing' => 'XiRatesTypeLondonFixing',
  'ListRates' => 'XiRatesTypeListRates',
  'ListRatesResponse' => 'XiRatesTypeListRatesResponse',
  'ArrayOfRateDescription' => 'XiRatesTypeArrayOfRateDescription',
  'ListRatesByRateFamily' => 'XiRatesTypeListRatesByRateFamily',
  'ListRatesByRateFamilyResponse' => 'XiRatesTypeListRatesByRateFamilyResponse',
  'SearchRates' => 'XiRatesTypeSearchRates',
  'SearchRatesResponse' => 'XiRatesTypeSearchRatesResponse',
  'GetRateSymbol' => 'XiRatesTypeGetRateSymbol',
  'GetRateSymbolResponse' => 'XiRatesTypeGetRateSymbolResponse',
  'RateSymbol' => 'XiRatesTypeRateSymbol',
  'GetRateFromSymbol' => 'XiRatesTypeGetRateFromSymbol',
  'GetRateFromSymbolResponse' => 'XiRatesTypeGetRateFromSymbolResponse',
  'GetRate' => 'XiRatesTypeGetRate',
  'GetRateResponse' => 'XiRatesTypeGetRateResponse',
  'GetRateFamilyTable' => 'XiRatesTypeGetRateFamilyTable',
  'GetRateFamilyTableResponse' => 'XiRatesTypeGetRateFamilyTableResponse',
  'RateTable' => 'XiRatesTypeRateTable',
  'ArrayOfRateTableLine' => 'XiRatesTypeArrayOfRateTableLine',
  'RateTableLine' => 'XiRatesTypeRateTableLine',
  'ArrayOfRateTableCell' => 'XiRatesTypeArrayOfRateTableCell',
  'RateTableCell' => 'XiRatesTypeRateTableCell',
  'GetAverageRate' => 'XiRatesTypeGetAverageRate',
  'GetAverageRateResponse' => 'XiRatesTypeGetAverageRateResponse',
  'GetAverageRates' => 'XiRatesTypeGetAverageRates',
  'GetAverageRatesResponse' => 'XiRatesTypeGetAverageRatesResponse',
  'HistoricalInterestRates' => 'XiRatesTypeHistoricalInterestRates',
  'GetRateMovingAverage' => 'XiRatesTypeGetRateMovingAverage',
  'GetRateMovingAverageResponse' => 'XiRatesTypeGetRateMovingAverageResponse',
  'GetDailyAverage' => 'XiRatesTypeGetDailyAverage',
  'GetDailyAverageResponse' => 'XiRatesTypeGetDailyAverageResponse',
  'GetMonthlyTreasuryAverage' => 'XiRatesTypeGetMonthlyTreasuryAverage',
  'GetMonthlyTreasuryAverageResponse' => 'XiRatesTypeGetMonthlyTreasuryAverageResponse',
  'GetRateFamily' => 'XiRatesTypeGetRateFamily',
  'GetRateFamilyResponse' => 'XiRatesTypeGetRateFamilyResponse',
  'GetTodaysRate' => 'XiRatesTypeGetTodaysRate',
  'GetTodaysRateResponse' => 'XiRatesTypeGetTodaysRateResponse',
  'GetLatestRate' => 'XiRatesTypeGetLatestRate',
  'GetLatestRateResponse' => 'XiRatesTypeGetLatestRateResponse',
  'GetLatestRateSpecial' => 'XiRatesTypeGetLatestRateSpecial',
  'GetLatestRateSpecialResponse' => 'XiRatesTypeGetLatestRateSpecialResponse',
  'GetLatestRateFamily' => 'XiRatesTypeGetLatestRateFamily',
  'GetLatestRateFamilyResponse' => 'XiRatesTypeGetLatestRateFamilyResponse',
  'GetRealTimeRate' => 'XiRatesTypeGetRealTimeRate',
  'GetRealTimeRateResponse' => 'XiRatesTypeGetRealTimeRateResponse',
  'GetRateAsOfTime' => 'XiRatesTypeGetRateAsOfTime',
  'GetRateAsOfTimeResponse' => 'XiRatesTypeGetRateAsOfTimeResponse',
  'GetHistoricalRates' => 'XiRatesTypeGetHistoricalRates',
  'GetHistoricalRatesResponse' => 'XiRatesTypeGetHistoricalRatesResponse',
  'GetHistoricalWeeklyRates' => 'XiRatesTypeGetHistoricalWeeklyRates',
  'GetHistoricalWeeklyRatesResponse' => 'XiRatesTypeGetHistoricalWeeklyRatesResponse',
  'GetHistoricalRateFamily' => 'XiRatesTypeGetHistoricalRateFamily',
  'GetHistoricalRateFamilyResponse' => 'XiRatesTypeGetHistoricalRateFamilyResponse',
  'FamilyRates' => 'XiRatesTypeFamilyRates',
  'ArrayOfHistoricalInterestRates' => 'XiRatesTypeArrayOfHistoricalInterestRates',
  'GetRateDescription' => 'XiRatesTypeGetRateDescription',
  'GetRateDescriptionResponse' => 'XiRatesTypeGetRateDescriptionResponse',
  'GetRateStatistics' => 'XiRatesTypeGetRateStatistics',
  'GetRateStatisticsResponse' => 'XiRatesTypeGetRateStatisticsResponse',
  'ArrayOfRateStatistics' => 'XiRatesTypeArrayOfRateStatistics',
  'RateStatistics' => 'XiRatesTypeRateStatistics',
  'DrawRateChartCustom' => 'XiRatesTypeDrawRateChartCustom',
  'ChartDesign' => 'XiRatesTypeChartDesign',
  'DrawRateChartCustomResponse' => 'XiRatesTypeDrawRateChartCustomResponse',
  'RateChart' => 'XiRatesTypeRateChart',
  'StockChart' => 'XiRatesTypeStockChart',
  'DrawRateChart' => 'XiRatesTypeDrawRateChart',
  'DrawRateChartResponse' => 'XiRatesTypeDrawRateChartResponse',
  'DrawRateChartPreset' => 'XiRatesTypeDrawRateChartPreset',
  'DrawRateChartPresetResponse' => 'XiRatesTypeDrawRateChartPresetResponse',
  'GetChartDesign' => 'XiRatesTypeGetChartDesign',
  'GetChartDesignResponse' => 'XiRatesTypeGetChartDesignResponse',
  'DrawYieldCurve' => 'XiRatesTypeDrawYieldCurve',
  'DrawYieldCurveResponse' => 'XiRatesTypeDrawYieldCurveResponse',
  'YieldCurveChart' => 'XiRatesTypeYieldCurveChart',
  'DrawYieldCurvePreset' => 'XiRatesTypeDrawYieldCurvePreset',
  'DrawYieldCurvePresetResponse' => 'XiRatesTypeDrawYieldCurvePresetResponse',
  'DrawYieldCurveCustom' => 'XiRatesTypeDrawYieldCurveCustom',
  'DrawYieldCurveCustomResponse' => 'XiRatesTypeDrawYieldCurveCustomResponse',
  'Interpolate' => 'XiRatesTypeInterpolate',
  'InterpolateResponse' => 'XiRatesTypeInterpolateResponse',
  'Interpolation' => 'XiRatesTypeInterpolation',
  'ArrayOfInt' => 'XiRatesTypeArrayOfInt',
  'ArrayOfDouble' => 'XiRatesTypeArrayOfDouble',
  'GetFHLBankRates' => 'XiRatesTypeGetFHLBankRates',
  'GetFHLBankRatesResponse' => 'XiRatesTypeGetFHLBankRatesResponse',
  'ArrayOfFHLBankRate' => 'XiRatesTypeArrayOfFHLBankRate',
  'FHLBankRate' => 'XiRatesTypeFHLBankRate',
  'GetAuctionResult' => 'XiRatesTypeGetAuctionResult',
  'GetAuctionResultResponse' => 'XiRatesTypeGetAuctionResultResponse',
  'AuctionResult' => 'XiRatesTypeAuctionResult',
  'GetAuctionResults' => 'XiRatesTypeGetAuctionResults',
  'GetAuctionResultsResponse' => 'XiRatesTypeGetAuctionResultsResponse',
  'ArrayOfAuctionResult' => 'XiRatesTypeArrayOfAuctionResult',
  'LIBORTypes' => 'XiRatesTypeLIBORTypes',
  'LIBORCurrencyTypes' => 'XiRatesTypeLIBORCurrencyTypes',
  'OutcomeTypes' => 'XiRatesTypeOutcomeTypes',
  'RateTypes' => 'XiRatesTypeRateTypes',
  'MaturityUnitTypes' => 'XiRatesTypeMaturityUnitTypes',
  'StateRateTypes' => 'XiRatesTypeStateRateTypes',
  'FederalRateTypes' => 'XiRatesTypeFederalRateTypes',
  'SwapRateTypes' => 'XiRatesTypeSwapRateTypes',
  'SwapCurrencyTypes' => 'XiRatesTypeSwapCurrencyTypes',
  'REIBORTypes' => 'XiRatesTypeREIBORTypes',
  'Currencies' => 'XiRatesTypeCurrencies',
  'HIBORTypes' => 'XiRatesTypeHIBORTypes',
  'SOFIBORTypes' => 'XiRatesTypeSOFIBORTypes',
  'REIBIDTypes' => 'XiRatesTypeREIBIDTypes',
  'OIBORTypes' => 'XiRatesTypeOIBORTypes',
  'SIBORTypes' => 'XiRatesTypeSIBORTypes',
  'CIBORTypes' => 'XiRatesTypeCIBORTypes',
  'STIBORTypes' => 'XiRatesTypeSTIBORTypes',
  'VILIBORTypes' => 'XiRatesTypeVILIBORTypes',
  'WIBORTypes' => 'XiRatesTypeWIBORTypes',
  'EURIBORTypes' => 'XiRatesTypeEURIBORTypes',
  'WSJRateTypes' => 'XiRatesTypeWSJRateTypes',
  'FixingTypes' => 'XiRatesTypeFixingTypes',
  'FixingCurrencyTypes' => 'XiRatesTypeFixingCurrencyTypes',
  'PeriodType' => 'XiRatesTypePeriodType',
  'RateFamilyTypes' => 'XiRatesTypeRateFamilyTypes',
  'RateTableCellType' => 'XiRatesTypeRateTableCellType',
  'PeriodTypes' => 'XiRatesTypePeriodTypes',
  'StockChartStyles' => 'XiRatesTypeStockChartStyles',
  'LinePattern' => 'XiRatesTypeLinePattern',
  'ImageFrameType' => 'XiRatesTypeImageFrameType',
  'PredefinedProjection' => 'XiRatesTypePredefinedProjection',
  'TickPeriod' => 'XiRatesTypeTickPeriod',
  'HorzAlign' => 'XiRatesTypeHorzAlign',
  'PredefinedLightModel' => 'XiRatesTypePredefinedLightModel',
  'MethodologyTypes' => 'XiRatesTypeMethodologyTypes',
  'FHLBankTypes' => 'XiRatesTypeFHLBankTypes',
  'FHLBankRateTypes' => 'XiRatesTypeFHLBankRateTypes',
  'FHLBankRateMaturityTypes' => 'XiRatesTypeFHLBankRateMaturityTypes',
  'FHLBankTermTypes' => 'XiRatesTypeFHLBankTermTypes',
  'MaturityTypes' => 'XiRatesTypeMaturityTypes',
  'TermTypes' => 'XiRatesTypeTermTypes',
  'AuctionTypes' => 'XiRatesTypeAuctionTypes',
);
	}
}
?>