// JavaScript Document
 $(document)
		.ready(
				function(e) {
					$("#departure").keypress(function() {
						$("#delselerror").css("display", "none");
					});
					
					$("#destination").keypress(function() {
						$("#delselerror").css("display", "none");
					});
					
					
					getAirportWithCities();

					/*
					 * GET a QUOTE form validation in Home page
					 * 
					 */

				
					/*
					 * 
					 * GET Quote button click event
					 * 
					 */
					

					function getAirportWithCities() {
						//console.log("getAirportWithCities() method is called");

						var dropdownCityAirport = "";
						var jsonObj = [];

						$
								.ajax(
										{
											
											 url: "searchajax",
											 dataType: "json",
											success : function(result) {
												//console.log(JSON.stringify(result));
												$
														.each(result,
																function(index,
																		data) {
																	var portId = data.id;
																	var portName = data.port;
																	
																	var displayName = portName
																			
																	// console.log("Display
																	// : " +
																	// displayName);
																	map = {};
																	map["data"] = portId;
																	map["value"] = displayName;

																	jsonObj
																			.push(map);

																});

												dropdownCityAirport = JSON
														.stringify(jsonObj);

												// call auto complete for origin
												// destination
												autoCompleteStartForCityWithAirport(dropdownCityAirport);

											},
											error : function(jqXhr, textStatus,
													errorThrown) {
//												console.log("ERROR : "+ errorThrown);
											}
										}).done(function(data) {
								});
					}

					function autoCompleteStartForCityWithAirport(
							dropdownCityAirport) {

						$('#departure')
								.autocomplete(
										{

											lookup : JSON
													.parse(dropdownCityAirport),
											appendTo : '#auto-complete-dropdown-departure',
											lookupFilter : function(suggestion,
													originalQuery,
													queryLowerCase) {
												var re = new RegExp(
														'\\b'
																+ $.Autocomplete.utils
																		.escapeRegExChars(queryLowerCase),
														'gi');
												return re
														.test(suggestion.value);
											},
											onSelect : function(suggestion) {
												// getDestAirlinesAndServicesBySelectedDestCities(suggestion.data);
												if($("#destinationIdOne").val() == suggestion.data && $("#destinationIdOne").val() !=""){
													
													$("#destinationCountrySpan").css(
																{
																	"display" : "block",
																	"color" : "red"
																});
													$("#destinationCountrySpan").html("ORIGIN and DESTINATION can't be Same.");
												}else{
												$("#departureIdOne").val(
														suggestion.data);
												$("#departureCountrySpan")
														.css({
															"display" : "none",
															"color" : "red"
														});
												}
											},
											onHint : function(hint) {
												// console.log('Hint : ' +
												// hint);
											},
											onInvalidateSelection : function() {
//												console.log('Invalid selection : ');
												$("#departureCountrySpan")
														.css(
																{
																	"display" : "block",
																	"color" : "red"
																});
												$("#departureCountrySpan")
														.html(
																"In valid Selection");
												$("#departureIdOne").val("");
												// $('departure').remove();
											}

										});
										$('#departureFCL')
								.autocomplete(
										{

											lookup : JSON
													.parse(dropdownCityAirport),
											appendTo : '#auto-complete-dropdown-departureFCL',
											lookupFilter : function(suggestion,
													originalQuery,
													queryLowerCase) {
												var re = new RegExp(
														'\\b'
																+ $.Autocomplete.utils
																		.escapeRegExChars(queryLowerCase),
														'gi');
												return re
														.test(suggestion.value);
											},
											onSelect : function(suggestion) {
												// getDestAirlinesAndServicesBySelectedDestCities(suggestion.data);
												if($("#destinationIdOneFCL").val() == suggestion.data && $("#destinationIdOneFCL").val() !=""){
													
													$("#destinationCountrySpanFCL").css(
																{
																	"display" : "block",
																	"color" : "red"
																});
													$("#destinationCountrySpanFCL").html("ORIGIN and DESTINATION can't be Same.");
												}else{
												$("#departureIdOneFCL").val(
														suggestion.data);
												$("#departureCountrySpanFCL")
														.css({
															"display" : "none",
															"color" : "red"
														});
												}
											},
											onHint : function(hint) {
												// console.log('Hint : ' +
												// hint);
											},
											onInvalidateSelection : function() {
//												console.log('Invalid selection : ');
												$("#departureCountrySpanFCL")
														.css(
																{
																	"display" : "block",
																	"color" : "red"
																});
												$("#departureCountrySpanFCL")
														.html(
																"In valid Selection");
												$("#departureIdOneFCL").val("");
												// $('departure').remove();
											}

										});

						$('#destination')
								.autocomplete(
										{
											lookup : JSON
													.parse(dropdownCityAirport),
											appendTo : '#auto-complete-dropdown-destination',
											lookupFilter : function(suggestion,
													originalQuery,
													queryLowerCase) {
												var re = new RegExp(
														'\\b'
																+ $.Autocomplete.utils
																		.escapeRegExChars(queryLowerCase),
														'gi');
												return re
														.test(suggestion.value);
											},
											onSelect : function(suggestion) {
												// getDestAirlinesAndServicesBySelectedDestCities(suggestion.data);
												if($("#departureIdOne").val() == suggestion.data && $("#departureIdOne").val() !=""){
													
													$("#destinationCountrySpan").css(
																{
																	"display" : "block",
																	"color" : "red"
																});
													$("#destinationCountrySpan").html("ORIGIN and DESTINATION can't be Same.");
												}else{
												$("#destinationIdOne").val(
														suggestion.data);
												$("#destinationCountrySpan")
														.css({
															"display" : "none",
															"color" : "red"
														});
												}
											},
											onHint : function(hint) {
												// console.log('Hint : ' +
												// hint);
											},
											onInvalidateSelection : function() {
//												console.log('Invalid selection : ');
												$("#destinationCountrySpan").css(
																{
																	"display" : "block",
																	"color" : "red"
																});
												$("#destinationCountrySpan").html("In valid Selection");
												$("#destinationIdOne").val("");
											}

										});
										
										$('#destinationFCL')
								.autocomplete(
										{
											lookup : JSON
													.parse(dropdownCityAirport),
											appendTo : '#auto-complete-dropdown-destinationFCL',
											lookupFilter : function(suggestion,
													originalQuery,
													queryLowerCase) {
												var re = new RegExp(
														'\\b'
																+ $.Autocomplete.utils
																		.escapeRegExChars(queryLowerCase),
														'gi');
												return re
														.test(suggestion.value);
											},
											onSelect : function(suggestion) {
												// getDestAirlinesAndServicesBySelectedDestCities(suggestion.data);
												if($("#departureIdOneFCL").val() == suggestion.data && $("#departureIdOneFCL").val() !=""){
													
													$("#destinationCountrySpanFCL").css(
																{
																	"display" : "block",
																	"color" : "red"
																});
													$("#destinationCountrySpanFCL").html("ORIGIN and DESTINATION can't be Same.");
												}else{
												$("#destinationIdOneFCL").val(
														suggestion.data);
												$("#destinationCountrySpanFCL")
														.css({
															"display" : "none",
															"color" : "red"
														});
												}
											},
											onHint : function(hint) {
												// console.log('Hint : ' +
												// hint);
											},
											onInvalidateSelection : function() {
//												console.log('Invalid selection : ');
												$("#destinationCountrySpanFCL").css(
																{
																	"display" : "block",
																	"color" : "red"
																});
												$("#destinationCountrySpanFCL").html("In valid Selection");
												$("#destinationIdOneFCL").val("");
											}

										});

					}
				});