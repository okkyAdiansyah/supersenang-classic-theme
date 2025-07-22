let $ = jQuery;

    // Array yang berisi objek
    var merchantList = [
        { name: '', code: '' },
    ];

    // Mendapatkan elemen select
    var selectElement = document.getElementById("merchant");
    function OnBook() {
        let link = "https://secure.guestaps.com/"
        let merchant_id = "supersenang"
        let check_in = document.getElementById("check-in").value
        let check_out = document.getElementById("check-out").value
        let promo_code = document.getElementById("promo-code").value
        let adult = document.getElementById("adult-guest").innerHTML
        let children = document.getElementById("children-guest").innerHTML
        let infant = document.getElementById("infant-guest").innerHTML
        let check_in_input = document.getElementById("check-in")
        let check_out_input = document.getElementById("check-out")
        let check_in_label = document.getElementById("check-in-label")
        let check_out_label = document.getElementById("check-out-label")
        if (merchant_id == 'empty') {
            let alert_merchant = document.getElementById('alert-merchant')
            alert_merchant.classList.add('d-block')
        } else {
            if (check_in != '' && check_out != '') {
                if (promo_code != '') {
                    window.open(link+merchant_id+"/hotel-filter-redirect/"+check_in+"/"+check_out+"/"+promo_code+"?guest="+adult+"-"+children+"-"+infant+"");
                } else {
                    window.open(link+merchant_id+"/hotel-filter-redirect/"+check_in+"/"+check_out+"/promo_code_empty"+"?guest="+adult+"-"+children+"-"+infant+"");
                }
            }
            else if (check_in == '') {
                check_in_input.style.borderColor = "#dc3545"
                check_in_label.style.color = "#dc3545"
                let alert_check_in = document.getElementById('alert-check-in')
                alert_check_in.classList.add('d-block')
            } else if (check_out == '') {
                check_out_input.style.borderColor = "#dc3545"
                check_out_label.style.color = "#dc3545"
                let alert_check_out = document.getElementById('alert-check-out')
                alert_check_out.classList.add('d-block')
            }
        }
    }
    function OnSelect() {
        let alert_merchant = document.getElementById('alert-merchant')
        let select = document.getElementById('merchant')
        alert_merchant.classList.remove('d-block')
        select.classList.add('color-black')
    }
    $(function () {
        var dtToday = new Date();
        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear();
        if (month < 10)
            month = '0' + month.toString();
        if (day < 10)
            day = '0' + day.toString();
        var maxDate = year + '-' + month + '-' + day;
        $('#check-in').attr('min', maxDate);
        $('#check-out').attr('min', maxDate);
    });
    // ADULT
    function AdultsAdd() {
        var adult = document.getElementById('adult-amount');
        var guest = document.getElementById('adult-guest');
        var number = adult.innerHTML;
        number++;
        adult.innerHTML = number;
        guest.innerHTML = number;
    }
    function AdultsMin() {
        var adult = document.getElementById('adult-amount');
        var guest = document.getElementById('adult-guest');
        if (adult.innerHTML > 1) {
            var number = adult.innerHTML;
            number--;
            adult.innerHTML = number;
            guest.innerHTML = number;
        }
    }

    // Children
    function ChildrenAdd() {
        var children = document.getElementById('children-amount');
        var guest = document.getElementById('children-guest');
        var number = children.innerHTML;
        number++;
        children.innerHTML = number;
        guest.innerHTML = number;
    }
    function ChildrenMin() {
        var children = document.getElementById('children-amount');
        var guest = document.getElementById('children-guest');
        if (children.innerHTML > 0) {
            var number = children.innerHTML;
            number--;
            children.innerHTML = number;
            guest.innerHTML = number;
        }
    }

    // Infant
    function InfantAdd() {
        var infant = document.getElementById('infant-amount');
        var guest = document.getElementById('infant-guest');
        var number = infant.innerHTML;
        number++;
        infant.innerHTML = number;
        guest.innerHTML = number;
    }
    function InfantMin() {
        var infant = document.getElementById('infant-amount');
        var guest = document.getElementById('infant-guest');
        if (infant.innerHTML > 0) {
            var number = infant.innerHTML;
            number--;
            infant.innerHTML = number;
            guest.innerHTML = number;
        }
    }

    function ShowHidePopUp() {
        var show = document.getElementById("pop-up-guest")
        if (show.style.display === "block") {
            show.style.display = "none";
        } else {
            show.style.display = "block"
        }
    }

    function HidePopUp() {
        var hide = document.getElementById("pop-up-guest")
        hide.style.display = "none"
    }

    function WarningCheckIn() {
        let check_in_input = document.getElementById("check-in")
        let check_in_label = document.getElementById("check-in-label")
        check_in_input.style.borderColor = "#afabab"
        check_in_label.style.color = "#212529"
    }

    function WarningCheckOut() {
        let check_out_input = document.getElementById("check-out")
        let check_out_label = document.getElementById("check-out-label")
        check_out_input.style.borderColor = "#afabab"
        check_out_label.style.color = "#212529"
    }

    window.OnBook = OnBook;
    window.AdultsAdd = AdultsAdd;
    window.AdultsMin = AdultsMin;
    window.ChildrenAdd = ChildrenAdd;
    window.ChildrenMin = ChildrenMin;
    window.InfantAdd = InfantAdd;
    window.InfantMin = InfantMin;
    window.ShowHidePopUp = ShowHidePopUp;
    window.HidePopUp = HidePopUp;
    window.WarningCheckIn = WarningCheckIn;
    window.WarningCheckOut = WarningCheckOut;