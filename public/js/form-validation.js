
function showInvalid(formId, name, message) {
    $(`#${formId} input[name=${name}]`).addClass('is-invalid');
    $(`#${formId} input[name=${name}]`).siblings('.invalid-feedback').text(message);
}

function hideInvalid(formId, name) {
    $(`#${formId} input[name=${name}]`).removeClass('is-invalid');
}


function refreshValidation(formId) {
    $(`#${formId} input`).removeClass('is-invalid');
}


function objectLength(obj) {
    let size = 0, key;
    for (key in obj) {
      if (obj.hasOwnProperty(key)) size++;
    }
    return size;
};


const defaultConfig = {
    'required': (value) => value? undefined: 'Trường bắt buộc',
}

function setValidation(formId, config=defaultConfig) {
    let errors = {};
    let useConfig = {...defaultConfig, ...config};
    for(let prop in useConfig) {
        let validator = useConfig[prop];
        $(`#${formId} input.${prop}`).keyup(function(event) {
            let name = $(this).attr('name');
            let value = $(this).val();
            let error = validator(value);
            if (error) {
                showInvalid(formId, name, error);
                errors[name] = error;
            } else {
                hideInvalid(formId, name);
                delete errors[name];
            }
        });
    }

    $(`#${formId}`).submit(function(event) {
        let errors = {};
        for(let prop in useConfig) {
            let validator = useConfig[prop];
            $(`#${formId} input.${prop}`).each(function(event) {
                let name = $(this).attr('name');
                let value = $(this).val();
                let error = validator(value);
                if (error) {
                    showInvalid(formId, name, error);
                    errors[name] = error;
                } else {
                    hideInvalid(formId, name);
                    delete errors[name];
                }
            });
        }
        if (objectLength(errors) > 0) return false;
        console.log(errors);
        return true;
    });

}
