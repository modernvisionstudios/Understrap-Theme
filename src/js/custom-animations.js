/********************************
Site Loading Animations
********************************/


const loadAnimation = (htmlElement) => {

   setTimeout(() => {

      htmlElement.forEach((element) => {
        let panels = document.querySelectorAll(".loader");

        let tl = gsap.timeline({defaults:{stagger:0.3, ease: "power1.inOut"}})
                 .to(panels, 1, { yPercent: -100})


        tl.play();

      });
    }, 2000);

}

/********************************
Loading Circles
********************************/

const loadingBubbles = (el) => {

    el.forEach((element) => {
      let bubbles = document.querySelectorAll(".loader-circle");

      let tl = gsap.timeline({defaults:{repeat: -1, repeatDelay: 0.3, stagger:0.3, ease: "power1.inOut", yoyo:true }}).
      to(bubbles, { y: -20, scale:0.3, opacity: 0}).
      to(bubbles, { y: 0, scale:1, opacity: 1});

      tl.play();

    });

}

/********************************
Draw Strokes
********************************/

const drawStrokes = (el) => {

  let ctrl = new ScrollMagic.Controller();
  let self = this;

  el.forEach(function(self){


    let action = gsap.timeline()
    .to(self, 1, { ease: Linear.easeNone })

    let scene = new ScrollMagic.Scene({
      triggerElement: self,
      triggerHook: 0.75,
      reverse: true,
      offset:'-50%'
    })
    .setTween(action)
    .addTo(ctrl);
  });

}

/********************************
Scroll Animation with Children
********************************/

const popAnim = (htmlElement) => {

  let ctrl = new ScrollMagic.Controller();
  let self = this;

  htmlElement.forEach(function(self){

    let action = gsap.timeline()
    .from(self, 0.65, { yPercent: 100, opacity: 0, ease: "power1.outIn", stagger:0.3 });

    let scene = new ScrollMagic.Scene({
      triggerElement: self,
      triggerHook: 0.75,
      reverse: false,
      offset:-700
    })
    .setTween(action)
    .addTo(ctrl);
  });
}

/********************************
Scroll Animation Duration
********************************/


const scrollAnimDuration = (htmlElement) => {

  htmlElement.forEach((element) => {

    let scrollDirCtrl = new ScrollMagic.Controller();

    let durationEl = document.querySelectorAll(".duration-element");


    let action = gsap.timeline()
    .from(durationEl, 5, { xPercent: 100, opacity: 0, ease: "power1.outIn"});

    new ScrollMagic.Scene({
      triggerElement: element,
      triggerHook: 0.15,
      duration:'50%',
      offset: -800,
      reverse: true
    })
      .setTween(action)
      .addTo(scrollDirCtrl);
  });
}

/********************************
Drag And Drop
********************************/

const dragDrop = (id) => {
  Draggable.create(id);
}

/********************************
Hover Over
********************************/


const hoverOver = () => {

  const trigger = [...document.getElementsByClassName("team-member-toggle")];

  trigger.forEach.call(trigger, el => {
    el.addEventListener("mouseover", e => {
      const overlay = el.getElementsByClassName("theme-post-card-overlay")[0];

      gsap.timeline()
      .to(overlay, 0.4, { yPercent: 100, opacity: 1, ease: "power1.inOut" });

    });
  });

  trigger.forEach.call(trigger, el => {
    el.addEventListener("mouseout", e => {
      const overlay = el.getElementsByClassName("theme-post-card-overlay")[0];

      gsap.timeline()
      .to(overlay, 0.4, { yPercent: -100, opacity: 1, ease: "power1.inOut" });

    });
  });

}
