var type_auto = "auto";
var age_auto = "age1";
var price_auto = 0;
var engine_volume_auto = 0;
var sum = 0;
var customs_duty_sum = 0;
var auction_fee = 698;
var shipping_price = 0;
var shipping_price_auto = 0;
var shipping_price_moto = 0;
var shipping_price_harbor = 0;
var exchange_rates_USD = 1.04;
var exchange_rates_BYN = 0.39;
var delivery = 0;
var services = 0;
var duty_fee = 120;
var recycling_collection = 0;
var temporary_storage_costs = 400;

$('#type_auto').change(function(){
	type_auto = $('#type_auto').val();
	calc();
});

$('#age_auto').change(function(){
	age_auto = $('#age_auto').val();
	calc();
});

$('#price_auto').change(function(){
	price_auto = parseInt($('#price_auto').val());
	calc();
});

$('#engine_volume_auto').change(function(){
	engine_volume_auto = $('#engine_volume_auto').val();
	calc();
});

$('#platform').change(function(){
	shipping_price_auto = parseInt($('#platform option:selected').data('shipping-price_1'));
	shipping_price_moto = parseInt($('#platform option:selected').data('shipping-price_2'));
	shipping_price_harbor = parseInt($('#platform option:selected').data('shipping-price_3'));
	calc();
});

$('.delivery').change(function(){
	delivery = $(this).data('price');
	calc();
	console.log(delivery);
});


$('.services').change(function(){
	services = $(this).data('price');
	calc();
	console.log(services);
});

$('#price_auto').on('input', function(){
	if ($(this).val() < 0) {
		$(this).val(0);
	}
});

$('#engine_volume_auto').on('input', function(){
	if ($(this).val() < 0) {
		$(this).val(0);
	}
});

function calc() {
	switch (type_auto) {
		case 'auto': 
			switch (age_auto) {
				case 'age1': {
					let full_price_auto = auction_fee + price_auto;
					let curr_sum1 = 0;
					let curr_sum2 = 0;

					if (full_price_auto <= 8500) {
						curr_sum1 = full_price_auto * 0.54;
						curr_sum2 = engine_volume_auto * 2.5 * exchange_rates_USD;
					} else if (full_price_auto > 8500 && full_price_auto <= 16700) {
						curr_sum1 = full_price_auto * 0.48;
						curr_sum2 = engine_volume_auto * 3.5 * exchange_rates_USD;
					} else if (full_price_auto > 16700 && full_price_auto <= 42300) {
						curr_sum1 = full_price_auto * 0.48;
						curr_sum2 = engine_volume_auto * 5.5 * exchange_rates_USD;
					} else if (full_price_auto > 42300 && full_price_auto <= 84500) {
						curr_sum1 = full_price_auto * 0.48;
						curr_sum2 = engine_volume_auto * 7.5 * exchange_rates_USD;
					} else if (full_price_auto > 84500 && full_price_auto <= 16900) {
						curr_sum1 = full_price_auto * 0.48;
						curr_sum2 = engine_volume_auto * 15 * exchange_rates_USD;
					} else if (full_price_auto > 16900) {
						curr_sum1 = full_price_auto * 0.48;
						curr_sum2 = engine_volume_auto * 20 * exchange_rates_USD;
					}

					if (curr_sum1 >= price_auto) {
						customs_duty_sum = curr_sum1;
					} else {
						customs_duty_sum = curr_sum2;
					}

					recycling_collection = 544.5;

					break;
				}
				case 'age2': {
					if (engine_volume_auto <= 1000) {
						customs_duty_sum = engine_volume_auto * 1.5 * exchange_rates_USD;
					} else if (engine_volume_auto > 1000 && engine_volume_auto <= 1500) {
						customs_duty_sum = engine_volume_auto * 1.7 * exchange_rates_USD;
					} else if (engine_volume_auto > 1500 && engine_volume_auto <= 1800) {
						customs_duty_sum = engine_volume_auto * 2.5 * exchange_rates_USD;
					} else if (engine_volume_auto > 1800 && engine_volume_auto <= 2300) {
						customs_duty_sum = engine_volume_auto * 2.7 * exchange_rates_USD;
					} else if (engine_volume_auto > 2300 && engine_volume_auto <= 3000) {
						customs_duty_sum = engine_volume_auto * 3.0 * exchange_rates_USD;
					} else if (engine_volume_auto > 3000) {
						customs_duty_sum = engine_volume_auto * 3.6 * exchange_rates_USD;
					}

					recycling_collection = 816.7;

					break;
				}

				case 'age3': {
					if (engine_volume_auto <= 1000) {
						customs_duty_sum = engine_volume_auto * 3.0 * exchange_rates_USD;
					} else if (engine_volume_auto > 1000 && engine_volume_auto <= 1500) {
						customs_duty_sum = engine_volume_auto * 3.2 * exchange_rates_USD;
					} else if (engine_volume_auto > 1500 && engine_volume_auto <= 1800) {
						customs_duty_sum = engine_volume_auto * 3.5 * exchange_rates_USD;
					} else if (engine_volume_auto > 1800 && engine_volume_auto <= 2300) {
						customs_duty_sum = engine_volume_auto * 4.8 * exchange_rates_USD;
					} else if (engine_volume_auto > 2300 && engine_volume_auto <= 3000) {
						customs_duty_sum = engine_volume_auto * 5.0 * exchange_rates_USD;
					} else if (engine_volume_auto > 3000) {
						customs_duty_sum = engine_volume_auto * 5.7 * exchange_rates_USD;
					}

					recycling_collection = 1225.1;

					break;
				}
			}
			
			shipping_price = shipping_price_auto + shipping_price_harbor;

			break;
	}

	sum = customs_duty_sum + (delivery * exchange_rates_BYN) + (services * exchange_rates_BYN) + (recycling_collection * exchange_rates_BYN) + (duty_fee * exchange_rates_BYN) + (temporary_storage_costs * exchange_rates_BYN) + shipping_price; 
	$('#total_price').text(sum + '$');
}