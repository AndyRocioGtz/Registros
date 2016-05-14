(function() {
    'use strict';

    $(document).on("click", "area, option", function (env) {
      env.preventDefault();
      var element = $(env.currentTarget);
      var municipio = element.attr("id") || element.attr("value");
      console.log(municipio);
      var mun_value = $("select[name='select_municipios']").find(
        "option[value=" + municipio + "]").prop("selected", true).text();
      $("label[name='mun_label']").text(mun_value);
      console.log(mun_value);
      // body...
    });
}());