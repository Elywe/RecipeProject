var addStep = function () {
	const lastStep = document.querySelector("#steps li:last-child")
	const stepNumber = +lastStep.dataset.stepnumber + 1
	const steps = document.querySelector("#steps ul")
	const li = document.createElement("li")
	li.dataset.stepnumber = stepNumber
	const title = document.createElement("h3")
	title.innerHTML = "Etape " + stepNumber
	li.appendChild(title)
	li.innerHTML += "<input >"
	steps.appendChild(li)
}