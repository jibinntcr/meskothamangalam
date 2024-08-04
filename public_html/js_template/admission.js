$(document).ready(function () {
  var current_fs, next_fs, previous_fs //fieldsets
  var opacity
  var current = 1
  var steps = $("fieldset").length

  setProgressBar(current)

  $(".next").click(function () {
    current_fs = $(this).parent()
    next_fs = $(this).parent().next()

    //Add Class Active
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active")

    //show the next fieldset
    next_fs.show()
    //hide the current fieldset with style
    current_fs.animate(
      { opacity: 0 },
      {
        step: function (now) {
          // for making fielset appear animation
          opacity = 1 - now

          current_fs.css({
            display: "none",
            position: "relative",
          })
          next_fs.css({ opacity: opacity })
        },
        duration: 500,
      }
    )
    setProgressBar(++current)
  })

  $(".previous").click(function () {
    current_fs = $(this).parent()
    previous_fs = $(this).parent().prev()

    //Remove class active
    $("#progressbar li")
      .eq($("fieldset").index(current_fs))
      .removeClass("active")

    //show the previous fieldset
    previous_fs.show()

    //hide the current fieldset with style
    current_fs.animate(
      { opacity: 0 },
      {
        step: function (now) {
          // for making fielset appear animation
          opacity = 1 - now

          current_fs.css({
            display: "none",
            position: "relative",
          })
          previous_fs.css({ opacity: opacity })
        },
        duration: 500,
      }
    )
    setProgressBar(--current)
  })

  function setProgressBar(curStep) {
    var percent = parseFloat(100 / steps) * curStep
    percent = percent.toFixed()
    $(".progress-bar").css("width", percent + "%")
  }

  $(".submit").click(function () {
    return false
  })
})

document.addEventListener("DOMContentLoaded", function () {
  var radioYes = document.getElementById("HandicappedYes")
  var radioNo = document.getElementById("HandicappedNo")
  var gradeField = document.getElementById("HandicappedGrade")
  var certificateField = document.getElementById(
    "HandicappedCertificateDetails"
  )
  var handicappedFields = document.getElementById("HandicappedFields")
  var handicappedCertificateDetailsFields = document.getElementById(
    "HandicappedCertificateDetailsFields"
  )

  radioYes.addEventListener("change", function () {
    if (this.checked) {
      handicappedFields.style.display = "block"
      handicappedCertificateDetailsFields.style.display = "block"
    }
  })

  radioNo.addEventListener("change", function () {
    if (this.checked) {
      handicappedFields.style.display = "none"
      handicappedCertificateDetailsFields.style.display = "none"
    }
  })
})

document.addEventListener("DOMContentLoaded", function () {
  var radioYes = document.getElementById("GamesYes")
  var radioNo = document.getElementById("GamesNo")
  var gradeField = document.getElementById("GamesGradeField")
  var certificateField = document.getElementById("GamesCertificateDetailsField")

  radioYes.addEventListener("change", function () {
    if (this.checked) {
      gradeField.style.display = "block"
      certificateField.style.display = "block"
    }
  })

  radioNo.addEventListener("change", function () {
    if (this.checked) {
      gradeField.style.display = "none"
      certificateField.style.display = "none"
    }
  })
})

document.addEventListener("DOMContentLoaded", function () {
  var radioYes = document.getElementById("CulturalYes")
  var radioNo = document.getElementById("CulturalNo")
  var gradeField = document.getElementById("CulturalGradeField")
  var certificateField = document.getElementById(
    "CulturalCertificateDetailsField"
  )

  radioYes.addEventListener("change", function () {
    if (this.checked) {
      gradeField.style.display = "block"
      certificateField.style.display = "block"
    }
  })

  radioNo.addEventListener("change", function () {
    if (this.checked) {
      gradeField.style.display = "none"
      certificateField.style.display = "none"
    }
  })
})

document.addEventListener("DOMContentLoaded", function () {
  var radioYes = document.getElementById("NCCYes")
  var radioNo = document.getElementById("NCCNo")
  var gradeField = document.getElementById("NCCGradeField")
  var certificateField = document.getElementById("NCCCertificateDetailsField")

  radioYes.addEventListener("change", function () {
    if (this.checked) {
      gradeField.style.display = "block"
      certificateField.style.display = "block"
    }
  })

  radioNo.addEventListener("change", function () {
    if (this.checked) {
      gradeField.style.display = "none"
      certificateField.style.display = "none"
    }
  })
})

document.addEventListener("DOMContentLoaded", function () {
  var radioYes = document.getElementById("NSSYes")
  var radioNo = document.getElementById("NSSNo")
  var gradeField = document.getElementById("NSSGradeField")
  var certificateField = document.getElementById("NSSCertificateDetailsField")

  radioYes.addEventListener("change", function () {
    if (this.checked) {
      gradeField.style.display = "block"
      certificateField.style.display = "block"
    }
  })

  radioNo.addEventListener("change", function () {
    if (this.checked) {
      gradeField.style.display = "none"
      certificateField.style.display = "none"
    }
  })
})

document.addEventListener("DOMContentLoaded", function () {
  var radioYes = document.getElementById("ExServiceYes")
  var radioNo = document.getElementById("ExServiceNo")
  var gradeField = document.getElementById("ExServiceGradeField")
  var certificateField = document.getElementById(
    "ExServiceCertificateDetailsField"
  )

  radioYes.addEventListener("change", function () {
    if (this.checked) {
      gradeField.style.display = "block"
      certificateField.style.display = "block"
    }
  })

  radioNo.addEventListener("change", function () {
    if (this.checked) {
      gradeField.style.display = "none"
      certificateField.style.display = "none"
    }
  })
})

document.addEventListener("DOMContentLoaded", function () {
  var radioYes = document.getElementById("SportsYes")
  var radioNo = document.getElementById("SportsNo")
  var gradeField = document.getElementById("SportsGradeField")
  var certificateField = document.getElementById(
    "SportsCertificateDetailsField"
  )

  radioYes.addEventListener("change", function () {
    if (this.checked) {
      gradeField.style.display = "block"
      certificateField.style.display = "block"
    }
  })

  radioNo.addEventListener("change", function () {
    if (this.checked) {
      gradeField.style.display = "none"
      certificateField.style.display = "none"
    }
  })
})

function toggleInputField(inputId, radio) {
  var inputs = document.querySelectorAll(".form-group")
  for (var i = 0; i < inputs.length; i++) {
    inputs[i].style.display = "none"
  }
  var inputField = document.getElementById(inputId)
  inputField.style.display = "block"
}
