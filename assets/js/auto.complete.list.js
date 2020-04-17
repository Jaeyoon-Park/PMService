$(function(){
	$('div.input-group').on('click', 'span.auto-complete-list', function() {
		var kind = $(this).parent().children($('input')).attr('name');
console.log(kind);
		var customer_company_serial = ($('input[name=customer_company_serial]').val()) ? $('input[name=customer_company_serial]').val() : '0';
		var customer_company_code = ($('input[name=customer_company_code]').val()) ? $('input[name=customer_company_code]').val() : '0';
		var supplier_company_sort = ($(this).parent().children($('input')).data('sort')) ? $(this).parent().children($('input')).data('sort') : '1';
		var supplier_company_serial = ($("input[name=supplier_company_serial"+supplier_company_sort+"]").val()) ? $("input[name=supplier_company_serial"+supplier_company_sort+"]").val() : '0';
		var j_serial = ($("input[name=job_serial_hidden]").val()) ? $("input[name=job_serial_hidden]").val() : '0';
        var sq_serial = ($("input[name=job_quotation_serial_hidden]").val()) ? $("input[name=job_quotation_serial_hidden]").val() : '0';
        var pe_serial = ($("input[name=pe_user_serial]").val()) ? $("input[name=pe_user_serial]").val() : '0';

		if(kind == "customer_user_name" || kind == "enquiry" || kind == "pe_quotation")
		{
			if(!customer_company_serial || customer_company_serial < 1)
			{
				alert('고객사를 먼저 검색하세요.');
				$('input[name=customer_user_name]').val('');
				$('input[name=company_name]').focus();
				$.scrollTo("-=60px");
				
				return;
			}
		}

		modal_layer_open("/autocomplete/lists/"+kind+"/"+customer_company_serial+"/"+customer_company_code+"/"+supplier_company_serial+"/"+supplier_company_sort+"/"+j_serial+"/"+sq_serial+"/"+pe_serial);
	});
});