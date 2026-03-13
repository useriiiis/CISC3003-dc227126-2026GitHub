/* add code here */

// Set up event listeners after the page has loaded
document.addEventListener('DOMContentLoaded', function() {
    var form = document.getElementById('mainForm');
    
    // Get all hilightable elements (Title, Description, Genre, Subject, Medium, Year, Museum)
    var hilightableElements = document.querySelectorAll('.hilightable');
    
    // Add focus and blur listeners to hilightable elements
    for (var i = 0; i < hilightableElements.length; i++) {
        hilightableElements[i].addEventListener('focus', function() {
            this.classList.add('highlight');
        });
        hilightableElements[i].addEventListener('blur', function() {
            this.classList.remove('highlight');
        });
    }
    
    // Get all required elements (Title, Description, Year)
    var requiredElements = document.querySelectorAll('.required');
    
    // Add submit handler to the form
    form.addEventListener('submit', function(event) {
        var hasError = false;
        
        // Check each required field - if empty, add error class
        for (var j = 0; j < requiredElements.length; j++) {
            var element = requiredElements[j];
            var isEmpty = false;
            
            if (element.tagName === 'SELECT') {
                // For select, check if first option (placeholder) is selected
                isEmpty = (element.selectedIndex === 0);
            } else {
                // For input, check if value is empty
                isEmpty = (element.value.trim() === '');
            }
            
            if (isEmpty) {
                element.classList.add('error');
                hasError = true;
            } else {
                element.classList.remove('error');
            }
        }
        
        // If any required field is empty, prevent form submission
        if (hasError) {
            event.preventDefault();
        }
    });
    
    // Add input/change handlers to required elements to remove error when content changes
    for (var k = 0; k < requiredElements.length; k++) {
        var reqElement = requiredElements[k];
        
        reqElement.addEventListener('input', function() {
            if (this.value.trim() !== '') {
                this.classList.remove('error');
            }
        });
        
        reqElement.addEventListener('change', function() {
            if (this.tagName === 'SELECT') {
                if (this.selectedIndex !== 0) {
                    this.classList.remove('error');
                }
            } else if (this.value.trim() !== '') {
                this.classList.remove('error');
            }
        });
    }
});
