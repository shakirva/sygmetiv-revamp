const carousel = document.querySelector(".carousel");
const innerCarousel = document.querySelector(".main-card");
const mainCard = document.querySelector(".main-card");
const cards = document.querySelectorAll(".card");
const handberger = document.querySelector(".handberger-group");
const menu = document.querySelector(".menu");
let isHandbergerOpen = false;
let isServiceOpen = false;
const menuService = document.querySelector(".menu-service");
const leftText = document.querySelector(".menuLeft");
const box = document.querySelectorAll(".box");
const boxes = [
  {
    title: "ERP Solution",
    subTitle: "The Hero of Business Transformation",
    description: "Our ERP solution is the cornerstone of our service offerings, celebrated for its transformative impact on enterprises and MSMEs alike.",
    image: "./accests/erp-01.jpg"
  },
  {
    title: "Business Application",
    subTitle: "Redefining Future of Business",
    description: "Our business applications are designed to address a wide range of challenges with customized solutions. By streamlining processes and adapting to evolving market trends",
    image: "./accests/Business-App.jpg"
  },
  {
    title: "Web Development",
    subTitle: "Crafting experiences that Wow..!",
    description: "Enthusiastic web team create visually stunning, user-friendly websites that position your brand. Our skilled developers are dedicated to meeting your unique needs and delivering exceptional results.",
    image: "./accests/development.jpg"
  },
  {
    title: "Digital Marketing",
    subTitle: "Get Found, Get Leads, Get Sales",
    description: "Our enhanced digital marketing strategies are designed to achieve your brand’s marketing objectives with suite of SEO, Social media marketing, Google Ads, content marketing, and email marketing.",
    image: "./accests/digital-marketing.jpg"
  },
  {
    title: "UI/UX Designing",
    subTitle: "Designing for Impact",
    description: "Our UI/UX designers create intuitive interfaces that enhance user experience, improve customer satisfaction, and drive business growth.",
    image: "./accests/uiux.jpg"
  },
  {
    title: "Branding",
    subTitle: "Building Your Brand Identity",
    description: "We help you develop a strong, memorable brand identity that resonates with your target audience and sets you apart from competitors.",
    image: "./accests/branding.jpg"
  },
  {
    title: "WhatsApp API",
    subTitle: "Engage Customers on WhatsApp",
    description: "From automated chatbots to personalized campaigns, we provide the tools and expertise to maximize the potential of WhatsApp for your business.",
    image: "./accests/whatsapp.jpg"
  },
  {
    title: "Ecommerce Solution",
    subTitle: "Power Your Online Store",
    description: "Our ecommerce solutions provide a robust platform for selling products and services online, offering features like secure payments, inventory management, and marketing tools.",
    image: "./accests/e-commerce.jpg"
  },
];

const portData = [
  {
    subTitle:
      "Sygmetiv successfully implemented Odoo ERP for Gulf Crafts, streamlining their operations and enhancing efficiency. This comprehensive solution integrated various business processes,",
  },
  {
    subTitle:
      "Sygmetiv developed a user-friendly ticket booking application for Nine1Event, designed to streamline the purchase of tickets for stage events and theatre shows. This application offers a seamless and efficient ticketing experience, showcasing Sygmetiv’s ability to create tailored digital solutions that enhance customer convenience and satisfaction. ",
  },
  {
    subTitle:
      "Sygmetiv implemented a unique strategy for Espanshe’s e-commerce platform, resulting in exceptional revenue growth and ROI. This success story highlights Sygmetiv’s expertise in crafting tailored digital solutions that drive significant business performance and customer engagement. ",
  },
  {
    subTitle:
      "Sygmetiv developed a comprehensive Donor Management System for CIGI, enabling efficient report generation for donors and students, tracking their funds and selected courses. The system also supports event management functions, including ticket sales and participant tracking, showcasing Sygmetiv’s capability in delivering versatile and effective digital solutions. ",
  },
  {
    subTitle:
      "Sygmetiv solved painpoints insurance payment portal for Al Khaleej Takaful Insurance, enhancing their customer experience with seamless online transactions. This solution ensures secure, efficient, and user-friendly payment processing, reflecting Sygmetiv’s commitment to delivering innovative and reliable digital solutions. ",
  },
  {
    subTitle:
      "Sygmetiv is spearheading the branding activities for Jiara Gracio, a minimalist jewelry brand. Our efforts include delivering high-quality branding materials and driving franchise sales growth, showcasing our expertise in creating impactful brand strategies that foster business expansion. ",
  },
  {
    subTitle:
      "Sygmetiv designed and developed a unique corporate website for Al Danah Medical, featuring custom animations and a distinctive UI design. This project highlights our ability to create visually engaging and functional websites that enhance brand presence and user experience. ",
  },
  {
    subTitle:
      "Sygmetiv customized Odoo HRM for Retro Technical Services, enhancing their operational efficiency. This tailored solution integrated various business processes, providing real-time data access and improved decision-making capabilities. The project underscores Sygmetiv’s expertise in delivering bespoke HRM solutions that drive business growth.  ",
  },
];

if (window.innerWidth > 1200) {
  const boxArr = document.querySelectorAll(".row2 > div"); // Selecting all boxes inside row2
  let base = 0; // Initial translateY value
  const scrollStep = 195; // Amount to move in each step (in pixels)
  let scrollInterval;

  const scrollBoxes = () => {
    base += scrollStep; // Add -200px to each box's current translateY

    boxArr.forEach((box) => {
      box.style.transform = `translateY(-${base}px)`; // Apply the transformation
    });

    // If box4 (index 3) is at the top, reset everything
    if (base >= scrollStep * 3) {
      // 3 times scrollStep means box4 is on top
      setTimeout(() => {
        // Reset translateY for all boxes
        boxArr.forEach((box) => {
          box.style.transform = `translateY(0px)`;
        });
        base = 0; // Reset the base value
      }, 2000); // Wait for 1 second before resetting
    }
  };

  const startScrolling = () => {
    scrollInterval = setInterval(scrollBoxes, 2000);
  };

  const stopScrolling = () => {
    clearInterval(scrollInterval);
  };

  startScrolling();

  // Stop scrolling when mouse enters the boxes

  const hoverDiv = document.querySelector(".row2");

  hoverDiv.addEventListener("mouseenter", stopScrolling);
  hoverDiv.addEventListener("mouseleave", startScrolling);
}

menuService.addEventListener("mouseover", () => {
  isServiceOpen ? (leftText.style.opacity = 0) : (leftText.style.opacity = 1),
    (isServiceOpen = !isServiceOpen);
});

const boxElements = document.querySelectorAll('.box');

boxElements.forEach((box) => {
  box.addEventListener('mouseenter', (event) => {
    const boxTitle = event.target.innerText;

    boxes.forEach((boxData) => {
      if (boxData.title === boxTitle) {
        document.querySelector('.half-box-title').innerText = boxData.title;
        document.querySelector('.box-sub-title').innerText = boxData.subTitle;
        document.querySelector('.description').innerText = boxData.description;
        document.querySelector('.box-img').src = boxData.image;  // Update the image dynamically
      }
    });
  });
});

handberger.addEventListener(
  "click",
  () => (
    isHandbergerOpen
      ? menu.classList.add("display")
      : menu.classList.remove("display"),
    (isHandbergerOpen = !isHandbergerOpen)
  )
);

const setMaxWidth = () => {
  if (window.innerWidth < 768) {
    const screenSize = window.innerWidth;
    carousel.style.maxWidth = `${screenSize}px`;
    mainCard.style.minWidth = `${(screenSize * 60) / 100}px`;
    cards.forEach(
      (card) => (card.style.minWidth = `${(screenSize * 40) / 100}px`)
    );
  }
};

const startCarouselLoop = () => {
  const portfolio = document.querySelectorAll(".carousel > div"); // Select all divs in the carousel
  const subTextElements = document.querySelectorAll(".port-sub-text"); // Select all port-sub-text elements
  const carousel = document.querySelector(".carousel"); // Select the entire carousel

  let currentIndex = 0; // Track the current index of the first element
  let firstDivWidth, secondDivWidth; // Variables to store the initial widths

  // Function to check if the viewport size is mobile
  const isMobile = () => window.innerWidth <= 768; // Define a threshold for mobile size (e.g., 768px)

  // Function to hide subTextElements on mobile screens
  const handleSubTextVisibility = () => {
    if (isMobile()) {
      // Hide subTextElements on mobile
      subTextElements.forEach((element) => {
        element.style.display = "none";
      });
    } else {
      // Show subTextElements on larger screens
      subTextElements.forEach((element) => {
        element.style.display = "block";
      });
    }
  };

  // Function to reset all elements' display and transform properties
  const resetCarousel = () => {
    portfolio.forEach((element, index) => {
      element.style.visibility = "visible"; // Make sure all elements are visible
      element.style.transform = "translateX(0px)"; // Reset the transform to initial
      element.style.transition = "min-width 0.8s ease-in-out"; // Ensure width transition

      // Set min-width to the stored second div's width for all elements
      element.style.minWidth = `${secondDivWidth}px`;

      // If it's the first div, use the firstDivWidth
      if (index === 0) {
        element.style.minWidth = `${firstDivWidth}px`;
        element.style.maxWidth = `${firstDivWidth}px`; // Ensure max-width is also set to avoid shrinking
      } else {
        // Reset others to secondDivWidth
        element.style.maxWidth = `${secondDivWidth}px`;
      }
    });

    carousel.style.transition = "none"; // Remove any transition effect after reset
    carousel.style.transform = "translateX(0px)"; // Reset carousel position
  };

  const animateCarousel = () => {
    handleSubTextVisibility(); // Check and apply subText visibility based on viewport size

    if (portfolio.length > 0) {
      const firstElement = portfolio[currentIndex]; // Get the current first element
      const firstSubText = subTextElements[currentIndex]; // Get the corresponding sub-text

      // Store the width of the first (extended) div at the start of the loop
      if (currentIndex === 0 && !firstDivWidth) {
        firstDivWidth = firstElement.offsetWidth; // Store first div's width once
        const secondElement = portfolio[1]; // Get the second element
        secondDivWidth = secondElement.offsetWidth; // Store second div's width once
      }

      // Set the sub-text for the first element from portData array (only if not on mobile)
      if (!isMobile()) {
        firstSubText.style.transition = "opacity 0.2s ease-in-out"; // Add a smooth transition
        firstSubText.innerText = portData[currentIndex].subTitle;
        firstSubText.style.opacity = 1; // Ensure the sub-text is visible
      }

      const firstElementWidth = firstElement.offsetWidth;

      setTimeout(() => {
        // Move the entire carousel by the width of the first element
        carousel.style.transition = "transform 0.8s ease-in-out"; // Smoother transition for the entire carousel
        carousel.style.transform = `translateX(-${firstElementWidth}px)`; // Move the entire carousel to the left

        const nextIndex = (currentIndex + 1) % portfolio.length; // Get the next element in line
        const secondElement = portfolio[nextIndex]; // Get the next element
        const secondSubText = subTextElements[nextIndex]; // Get the corresponding sub-text element

        // Update the text for the second element from portData (only if not on mobile)
        if (!isMobile()) {
          secondSubText.innerText = portData[nextIndex].subTitle;
        }

        // Apply smooth expansion animation when resizing the second element
        secondElement.style.visibility = "visible"; // Ensure it's visible before animation
        secondElement.style.minWidth = `${firstDivWidth}px`; // Expand width smoothly to the first div's width
        console.log(firstDivWidth); // Hide the first element after the transition

        setTimeout(() => {
          firstElement.style.transition = "none"; // Disable transitions for hiding
          firstElement.style.transform = `translateX(-${firstElementWidth}px)`; // Move it out of sight
          firstElement.style.visibility = "hidden"; // Use visibility instead of display for smoother transitions

          // Reset the carousel transform to start from the new first element
          carousel.style.transition = "none"; // Disable transition to avoid visual jump
          carousel.style.transform = `translateX(0)`; // Reset carousel position to the new first element

          // Move the current first element to the end of the carousel
          carousel.appendChild(firstElement); // Move the first element to the end

          // Update currentIndex to the next element
          currentIndex = nextIndex;

          // Check if we are at the end of the carousel
          if (currentIndex === 0) {
            // Before restarting, recalculate all widths to avoid overlap between the first and last elements
            portfolio.forEach((element) => {
              element.style.minWidth = `${secondDivWidth}px`; // Resize all divs to the second div's stored min-width
              element.style.maxWidth = `${secondDivWidth}px`; // Ensure max-width as well
            });

            portfolio[0].style.minWidth = `${firstDivWidth}px`; // Resize the first div to its original width
            portfolio[0].style.maxWidth = `${firstDivWidth}px`; // Also set max-width to maintain consistency

            resetCarousel(); // Bring all elements back to the default state
            setTimeout(animateCarousel, 1000); // Restart after resetting
          } else {
            setTimeout(animateCarousel, 800); // Shorter delay for a smoother continuous loop
          }
        }, 800); // Timeout matches the transition duration of the carousel movement
      }, 1000); // Delay before the first element starts moving
    }
  };

  animateCarousel(); // Start the carousel loop

  // Add resize event listener to handle viewport changes dynamically
  window.addEventListener("resize", handleSubTextVisibility);
};

// Call the function to start the continuous carousel loop
startCarouselLoop();

function toggleDisplayClass() {
  const tabViewportWidth = 768; // Define your tab viewport width threshold
  const serviceWrapper = document.querySelector(".service-wrapper");
  const dServiceWrapper = document.querySelector(".d-service-wrapper");
  const footer = document.querySelector(".footer");
  const Dfooter = document.querySelector(".d-footer");
  const heroBtn = document.querySelectorAll(".hero-btn");
  const aboutImg = document.querySelector(".about-img");

  // Get the current viewport width
  const viewportWidth = window.innerWidth;

  // Check the conditions and toggle the "display" class
  if (viewportWidth > tabViewportWidth) {
    // If viewport is greater than tab, add "display" class to service-wrapper
    serviceWrapper.classList.add("display");
    dServiceWrapper.classList.remove("display"); // Make sure it's removed from the other element
    footer.classList.add("display");
    Dfooter.classList.remove("display");
    heroBtn[1].classList.add("display");
    heroBtn[0].classList.remove("display");
    // aboutImg.style.display = "block";
  } else {
    // If viewport is smaller than or equal to tab, add "display" class to d-service-wrapper
    dServiceWrapper.classList.add("display");
    serviceWrapper.classList.remove("display"); // Remove it from the other element
    Dfooter.classList.add("display");
    footer.classList.remove("display");
    heroBtn[0].classList.add("display");
    heroBtn[1].classList.remove("display");
    // aboutImg.style.display = "none";

    // aboutImg.classList.add("display");
  }
}

// Run the function initially to set the correct class based on the current viewport
toggleDisplayClass();
window.addEventListener("resize", toggleDisplayClass);

// Optionally, listen for window resize events and update the classes dynamically
// window.addEventListener('resize', toggleDisplayClass);

setMaxWidth();
window.addEventListener("resize", setMaxWidth);













