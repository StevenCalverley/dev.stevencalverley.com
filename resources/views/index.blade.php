@extends ('layouts.master')

@section('content')
  <section class="inner-container hero">
    <h1 class="hero-text">Hello, my name is Steven, I am a Web Developer living on the Central Coast, NSW Australia.</h1>
  </section>

  <section class="outer-container space-bottom">
      <img src="images/beach.jpg" alt="Steven Hero">
  </section>

   <section class="inner-container space-bottom">
    <h3>About</h3>
    <p>I'm currently working as a Frontend Web Developer for <a href="http://heffron.com.au" class="yellow">Heffron</a>, which is where my passion for design and development converge. Ouside of work I spend time with my beautiful wife and two amazing children, often under the sun having a blast.</p>
    <h3>Services</h3>
    <h4>Full Stack Web Development</h4>
    <p>I'm a hard-working web developer with a flair for creating elegant web-based solutions on time and within budget. I build solutions that elevate experiences and empower businesses.</p>
    <p>I'm very passionate about <strong>software architecture</strong> and <strong>user experience</strong>.</p>
  </section>

  <section class="cta-section border">
    <div class="inner-container">
      <h1>Interested in doing a project together?</h1>
      <a href="mailto:emailme@stevencalverley.com" class="cta-button">Email Me <span class="arrow-right">→</span></a>
    </div>
  </section>
@endsection
