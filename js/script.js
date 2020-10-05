$(function(){

    $('a[href*="#"]:not([href="#"])').on('click',function(){
        var hashVal = $(this).attr('href'); 
        if(hashVal)
        {
            $('html,body').animate({
                scrollTop: $(hashVal).offset().top
            },800);
            return false;
        }
    });

    $('.card-wrapper').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 2,
        arrows: true,
        dots: false,
        adaptiveHeight: true
    });

});

// Get the modal
var shareModal = document.getElementById('shareModal');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == imageModal || event.target == shareModal) {
        imageModal.style.display = 'none';
        shareModal.style.display = 'none';
    }
};


// Get the modal
var shareModal = document.getElementById('shareModal');

function openShareModal(e, title) {
    if (navigator.share) {
        navigator.share({
            title,
            url: window.location.href,
        }).then(() => {
            console.log('Thanks for sharing!');
        })
            .catch(console.error);
    } else {
        shareModal.style.display = 'flex';
    }
}

// Get the <span> element that closes the modal
const shareModalClose = document.getElementById('shareModalClose');

// When the user clicks on <span> (x), close the modal
shareModalClose.onclick = function () {
    shareModal.style.display = 'none';
};


function handleWhatsappShare(e) {
    const { value } = document.getElementById('whatsapp-input');
    if (value.length < 10) {
        e.preventDefault();
        return;
    }
    e.href = `whatsapp:\/\/send?phone=91${document.getElementById('whatsapp-input').value}&text=${window.location.href} Bhavani Furniture - Direct Inquiry`;
}
function handleDirectWhatsappShare(e) {
    e.href = `whatsapp:\/\/send?text=${window.location.href}`;
}

function sendEnquiry(ele, mailTo) {
    ele.value = 'Sending...';
    ele.disabled = true;
    const name = document.getElementById('enquiryName');
    const phoneNumber = document.getElementById('phoneNumber');
    const email = document.getElementById('email');
    const message = document.getElementById('message');
    const data = {};
    data.mailTo = mailTo;
    data.name = name.value;
    data.phoneNumber = phoneNumber.value;
    data.email = email.value;
    data.message = message.value;
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (this.readyState === 4) {
            const response = JSON.parse(this.response);
            if (this.status === 200) {
                alert('Success: Mail sent Successfuly');
                name.value = '';
                phoneNumber.value = '';
                email.value = '';
                message.value = '';
            } else {
                alert(`Error: ${response.data.message}`);
            }
            ele.value = 'Send';
            ele.disabled = false;
        }
    };
    xhr.open('POST', '/api/v1/sendEnquiry');
    xhr.setRequestHeader('Content-type', 'application/json');
    xhr.send(JSON.stringify(data));
}

function sendFeedback(ele, cardId) {
    ele.value = 'Sending...';
    ele.disabled = true;
    const feedbackList = document.getElementsByClassName('feedback-list')[0];
    const rating = document.getElementById('rating');
    const name = document.getElementById('feedbackName');
    const feedback = document.getElementById('feedback');
    const data = {};
    data.cardId = cardId;
    data.rating = rating.value;
    data.name = name.value;
    data.feedback = feedback.value;
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (this.readyState === 4) {
            const response = JSON.parse(this.response);
            if (this.status === 200) {
                alert('Success: Feedback Given Successfully');
                rating.value = '';
                name.value = '';
                feedback.value = '';

                // Pushing new feedback in the list
                const feedbackResponse = response.data.feedback;
                const newFeedback = `<div class="feedback-wrapper">
                    <span class="feedback-name-wrapper"><span class="feedback-name">${feedbackResponse.name}</span> on ${feedbackResponse.date} </span>
                    <div><span class="gl-star-rating-stars s${feedbackResponse.rating}0"><span data-value="1" data-text="Terrible"></span><span data-value="2" data-text="Poor"></span><span data-value="3" data-text="Average"></span><span data-value="4" data-text="Very Good"></span><span data-value="5" data-text="Excellent"></span></span></div>
                    <div>${feedbackResponse.feedback}</div>
                    <hr />
                </div>`;
                feedbackList.insertAdjacentHTML('afterbegin', newFeedback);
            } else {
                alert(`Error: ${response.data.message}`);
            }
            ele.value = 'Give Feedback';
            ele.disabled = false;
        }
    };
    xhr.open('POST', '/api/v1/feedback');
    xhr.setRequestHeader('Content-type', 'application/json');
    xhr.send(JSON.stringify(data));
}

 $(".lazy").slick({
        // lazyLoad: 'ondemand', // ondemand progressive anticipated
        // infinite: true
        slidesToShow: 2,
        slidesToScroll: 2,
        centerPadding: '10px',
      });