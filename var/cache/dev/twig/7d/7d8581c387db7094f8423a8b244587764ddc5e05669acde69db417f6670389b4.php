<?php

/* AppBundle:landing:toc.html.twig */
class __TwigTemplate_0fc89aef8dafee99274c0d78731b1f4bfa1c830250e4997a9c792ebd13bbac61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:landing:toc.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            '__internal_719e7190608182a9d62efe5d17dda6274c3fe5cab1b7371c67192268dd4249cc' => array($this, 'block___internal_719e7190608182a9d62efe5d17dda6274c3fe5cab1b7371c67192268dd4249cc'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5cf608881a5dd163e00d8723aee2bf62eb1dd09b130122850ce61ee2169bdbc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cf608881a5dd163e00d8723aee2bf62eb1dd09b130122850ce61ee2169bdbc5->enter($__internal_5cf608881a5dd163e00d8723aee2bf62eb1dd09b130122850ce61ee2169bdbc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:landing:toc.html.twig"));

        $__internal_2fe8ef550d299d49084aadeca7d7affb327ea1b899c5f0188477b1af6efa627e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fe8ef550d299d49084aadeca7d7affb327ea1b899c5f0188477b1af6efa627e->enter($__internal_2fe8ef550d299d49084aadeca7d7affb327ea1b899c5f0188477b1af6efa627e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:landing:toc.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cf608881a5dd163e00d8723aee2bf62eb1dd09b130122850ce61ee2169bdbc5->leave($__internal_5cf608881a5dd163e00d8723aee2bf62eb1dd09b130122850ce61ee2169bdbc5_prof);

        
        $__internal_2fe8ef550d299d49084aadeca7d7affb327ea1b899c5f0188477b1af6efa627e->leave($__internal_2fe8ef550d299d49084aadeca7d7affb327ea1b899c5f0188477b1af6efa627e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e122fd79143cc0bb2473f11c9f5d99cabdcc8a8ecab9c3212c90db2dbf23407 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e122fd79143cc0bb2473f11c9f5d99cabdcc8a8ecab9c3212c90db2dbf23407->enter($__internal_3e122fd79143cc0bb2473f11c9f5d99cabdcc8a8ecab9c3212c90db2dbf23407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_038483e968876a251a2da3e41521dd3d3bcecb9eb62f7d1fc328ef890403c327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_038483e968876a251a2da3e41521dd3d3bcecb9eb62f7d1fc328ef890403c327->enter($__internal_038483e968876a251a2da3e41521dd3d3bcecb9eb62f7d1fc328ef890403c327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Terms of Use";
        
        $__internal_038483e968876a251a2da3e41521dd3d3bcecb9eb62f7d1fc328ef890403c327->leave($__internal_038483e968876a251a2da3e41521dd3d3bcecb9eb62f7d1fc328ef890403c327_prof);

        
        $__internal_3e122fd79143cc0bb2473f11c9f5d99cabdcc8a8ecab9c3212c90db2dbf23407->leave($__internal_3e122fd79143cc0bb2473f11c9f5d99cabdcc8a8ecab9c3212c90db2dbf23407_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8d547d9eacee02135db3d66624e9fcaabae06689b441319ab97cbddf182bd20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8d547d9eacee02135db3d66624e9fcaabae06689b441319ab97cbddf182bd20->enter($__internal_f8d547d9eacee02135db3d66624e9fcaabae06689b441319ab97cbddf182bd20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_15cd9e1f3dbde066a38cb903fc8444e0a08a92c95f1086e4dced0b391fed4476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15cd9e1f3dbde066a38cb903fc8444e0a08a92c95f1086e4dced0b391fed4476->enter($__internal_15cd9e1f3dbde066a38cb903fc8444e0a08a92c95f1086e4dced0b391fed4476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 7
        $this->loadTemplate("AppBundle:landing:navbar.html.twig", "AppBundle:landing:toc.html.twig", 7)->display($context);
        // line 8
        echo "  <div class=\"container\">
    <div class=\"row\">
      <h1 class=\"light center\">Terms of Use</h1>

    </div>

    <div class=\"row\">

      ";
        // line 16
        echo $this->env->getExtension('Knp\Bundle\MarkdownBundle\Twig\Extension\MarkdownTwigExtension')->markdown(        $this->renderBlock("__internal_719e7190608182a9d62efe5d17dda6274c3fe5cab1b7371c67192268dd4249cc", $context, $blocks));
        // line 91
        echo "
    </div>
  </div>
";
        
        $__internal_15cd9e1f3dbde066a38cb903fc8444e0a08a92c95f1086e4dced0b391fed4476->leave($__internal_15cd9e1f3dbde066a38cb903fc8444e0a08a92c95f1086e4dced0b391fed4476_prof);

        
        $__internal_f8d547d9eacee02135db3d66624e9fcaabae06689b441319ab97cbddf182bd20->leave($__internal_f8d547d9eacee02135db3d66624e9fcaabae06689b441319ab97cbddf182bd20_prof);

    }

    // line 16
    public function block___internal_719e7190608182a9d62efe5d17dda6274c3fe5cab1b7371c67192268dd4249cc($context, array $blocks = array())
    {
        $__internal_021795290b2ac0094f17ded636f21a827473a56b2347841ea2bedd52ed0f9f8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_021795290b2ac0094f17ded636f21a827473a56b2347841ea2bedd52ed0f9f8a->enter($__internal_021795290b2ac0094f17ded636f21a827473a56b2347841ea2bedd52ed0f9f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_719e7190608182a9d62efe5d17dda6274c3fe5cab1b7371c67192268dd4249cc"));

        $__internal_d3f624b027adb9b6a427a932115f54daf70ba8206651057da473778e97d1bda6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3f624b027adb9b6a427a932115f54daf70ba8206651057da473778e97d1bda6->enter($__internal_d3f624b027adb9b6a427a932115f54daf70ba8206651057da473778e97d1bda6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_719e7190608182a9d62efe5d17dda6274c3fe5cab1b7371c67192268dd4249cc"));

        // line 17
        echo "Please read these terms of use carefully before using the services offered by University of Newcastle Upon Tyne (“Newcastle University”, \"University of Newcastle Upon Tyne\", “we”, “us”). These terms of use set forth the legally binding terms and conditions for your use of the website at https://rosemary-accounts.co.uk (the \"Service\") and the services, features, content, applications or widgets offered by Newcastle University (collectively with the Service, the \"Service\").

**Please read these Terms of Use carefully before using the Service. If you do not accept these Terms of Use, then you may not use the Service. These Terms of Use are subject to change by us at any time, effective when posted on the Service. Your continued use after such notice will constitute acceptance by you of such changes.**

These Terms of Use apply to all users of the Service, including, without limitation, users who are contributors of content, information, and other materials or services on the Service, individual users of the Service, venues that access the Service, and users that have a page on the Service. By using the Service you are agreeing to be bound by these Terms of Use.

**USE OF THE SERVICE**. You may use this Service only subject to these Terms of Use, all applicable laws, rules and regulations and any agreements or terms with third parties to which you are subject. You may not use this Service for commercial purposes, such as to promote a product or service, without our prior written consent. We may impose restrictions on certain features or your access to the Service without notice or liability.

**PROHIBITED USE**. You may not use spiders, robots, data mining techniques or other automated devices or programs to catalog, download or otherwise reproduce, store or distribute content available on the Service. Further, you may not use any such automated means to manipulate the Service or attempt to exceed the limited authorization and access granted to you under these Terms of Use or disrupt the Service or any other user's use of the Service, including, without limitation, via means of overloading, “flooding”, “mailbombing” or “crashing” the Service or circumventing security or user authentication measures. You may not frame portions of the Service within another web site or establish links from any other web site to any page of the Service other than the home page. You may not resell use of, or access to, the Service to any third party.

**CONTENT**. Users may be able to post content in certain areas on the Service, such as in connection with chats, start movement pages, contributions (in design tasks) and in the comments or discussion sections of the Service. You are solely responsible for any content, photos, artwork, videos, text, graphics, articles and other information you upload, post, display or otherwise provide to the Service (“Content”). You represent and warrant that: (i) you own the Content posted by you on the Service or otherwise have the right to grant the license rights granted in these Terms of Use; (ii) your Content does not violate the privacy rights, publicity rights, intellectual property rights, or any other rights of any person; and (iii) the posting of Content on the Service does not result in a breach of any contract between you and a third party.

We do not guarantee the accuracy, completeness or usefulness of any Content. Furthermore, we do not endorse, nor are we responsible for, the accuracy and reliability of any opinion, advice or statement made on the Service by any third party. We assume no responsibility and no obligation to modify or remove any inappropriate Content, and no responsibility for the conduct of the user submitting any such content.

We reserve the right, in our sole discretion, to reject, refuse to post or remove any Content posted by you. We expressly reserve the right to remove or revoke your registration and/or restrict, suspend, or terminate your access to the Service if we determine, in our sole discretion, that you pose a threat to the Service and/or its users.

After posting your Content to the Service, you continue to retain all ownership rights in such Content, and you continue to have the right to use your Content in any way you choose. By supplying Content to any area of the Service, you automatically grant to us for purposes of maintaining the Service, making Content available, and you represent and warrant that you have the right to grant an irrevocable, transferable, sublicenseable, perpetual, non-exclusive, fully paid up, worldwide license to use, copy, perform, reproduce, display, edit, modify and distribute such information and Content and to prepare derivative works of, or incorporate into other works, such Content. Additionally, we shall be free to use any ideas, concepts, know-how or techniques contained in such Content for any purpose whatsoever, including without limitation, developing, manufacturing and marketing products and services which incorporate such Content, including mobile applications that may be created using the Service.

**ONLINE BEHAVIOR**. The Service is a space dedicated to helping charitable organisations become more transparent and accountable. You should not post Content to the Service that is inappropriate for or unrelated to this mission. The following is a partial list of the type of Content that is illegal or prohibited to post on or through the Service. Prohibited Content includes, but is not limited to Content that:

1. is patently offensive and promotes racism, bigotry, hatred or physical harm of any kind against any group or individual;
2. harasses or advocates harassment of another person;
3. exploits people in a sexual or violent manner;
4. contains nudity, violence, or offensive subject matter or contains a link to an adult website;
5. solicits personal information from anyone under the age of 21 years;
6. provides any telephone numbers, street addresses, last names, URLs or email addresses;
7. promotes information that you know is false or misleading or promotes illegal activities or conduct that is abusive, threatening, obscene, defamatory or libelous;
8. promotes an illegal or unauthorized copy of another person's copyrighted work, such as providing pirated computer programs or links to them, providing information to circumvent manufacture-installed copy-protect devices, or providing pirated music or links to pirated music files;
9. involves the transmission of \"junk mail,\" \"chain letters,\" or unsolicited mass mailing, instant messaging, \"spimming,\" or \"spamming\";
10. contains restricted or password only access pages or hidden pages or images (those not linked to or from another accessible page);
11. furthers or promotes any criminal activity or enterprise or provides instructional information about illegal activities including, but not limited to, making or buying illegal weapons, violating someone's privacy, or providing or creating computer viruses;
12. solicits passwords from other users or personal identifying information for commercial or unlawful purposes from other users;
13. involves commercial activities and/or sales without our prior written consent such as contests, sweepstakes, barter, advertising, or pyramid schemes;
14. or includes a photograph or video footage of another person that you have posted without that person's consent or other third party content including but not limited to music, trademarks, logos, artwork or any other copyrighted, trademarked, or proprietary third party content that you have not secured permission to include on the Site

If you wish to report any Content or conduct on the Service that you believe is inappropriate, please contact us at m.marshall@newcastle.ac.uk

**NO CONTENT MONITORING.**
We are under no obligation to screen or monitor Content, but may review Content from time to time at our sole discretion to review compliance with these Terms of Use. We will make all determinations as to what Content is appropriate in our sole discretion. We may include, edit or remove any Content at any time without notice. We may employ automated monitoring devices or techniques to protect our users from mass unsolicited communications (also known as \"spam\") and/or other types of electronic communications that we deem objectionable. Such devices or techniques are not perfect, and we will not be responsible for any legitimate communication that is blocked, or for any unsolicited communication that is not blocked. Mailboxes may have a limited storage capacity. If you exceed the maximum permitted storage space, we may employ automated devices that delete or block email messages that exceed the limit. We will not be responsible for such deleted or blocked messages.

**TERMINATION OF ACCESS.** In addition to any right or remedy that may be available to us under these Terms of Use or applicable law, we may suspend, limit or terminate all or a portion of your access to the Service, at any time with or without notice and with or without cause. In addition, we may refer any information on illegal activities, including your identity, to the proper authorities.

**PRIVACY**. The privacy of your personally identifiable information is very important to us. For more information on what information we collect and how we use such information, please read our Privacy Policy at http://appmovement.com/privacy

**LINKS.** This Service may contain links to other web sites not maintained by us (including without limitation Facebook, Twitter and other social media platforms). We encourage you to be aware when you leave our Service and to read the terms and conditions and privacy statements of each and every web site that you visit. We are not responsible for the practices or the content of such other web sites or services.

The existence of a link between this Service and any other website is not and shall not be understood to be an endorsement by us of the owner or proprietor of the linked internet website, nor an endorsement of us by the owner or proprietor of such linked website.

You agree that we shall not be liable to you or anyone else for any type of loss or damages, regardless of whether based on contract, negligence, intentional wrongdoing, or liability without fault for any costs, losses, or damages (whether direct, indirect, compensatory, special, lost profits, liquidated, consequential, or punitive) arising out of or in any way in connection with your access to or use of any such third party site.

**OUR PROPRIETARY RIGHTS.** We or our licensors are the exclusive owners of all copy, software, graphics, designs and all copyrights, trademarks and other intellectual property or proprietary rights contained on or used in connection with the Service. Except as set forth herein, you agree not to copy, distribute, modify or make derivative works of any materials without the prior written consent of the owner of such materials. All rights not granted under these Terms of Use are reserved by us.

**NO WARRANTIES.** The Service, including all content made available on or accessed through the Service, is provided \"as is\" and we make no representations or warranties of any kind whatsoever for the content made available through the Service. The Service may contain typographical errors and you agree that we shall not be bound by any such errors.

Further, to the fullest extent permissible by law, we disclaim any express or implied warranties, including, without limitation, non-infringement, title, merchantability or fitness for a particular purpose.

We do not warrant that the functions contained in the Service or, materials or content contained therein will be completely secure, uninterrupted or error free, that defects will be corrected, or that the site or the server that makes it available is free of viruses or other harmful components.

We shall not be liable for the use of the Service, including, without limitation, the content and any errors contained therein provided by third parties.

In no event will we be liable under any theory of tort, contract, strict liability or other legal or equitable theory for any direct, indirect, special, incidental, or other consequential damages, lost profits, lost data, lost opportunities, costs of cover, exemplary, punitive, personal injury/wrongful death, each of which is hereby excluded by agreement of the parties regardless of whether or not we have been advised of the possibility of such damages.

**INDEMNITY.** You agree to defend, indemnify and hold harmless us, our business partners and agents, from and against any and all claims, damages, obligations, losses, liabilities, costs or debt, and expenses (including but not limited to attorney's fees) arising from any breach by you of any of these Terms of Use.

**JURISDICTION AND GOVERNING LAW.** English law governs these terms and conditions. You submit to the non-exclusive jurisdiction of the English courts.

**SEVERABILITY.** If any part of these Terms of Use shall be held or declared to be invalid or unenforceable for any reason by any court of competent jurisdiction, such provision shall be ineffective but shall not affect any other part of these Terms of Use.

**WAIVER; REMEDIES.** The failure by us to partially or fully exercise any rights or the waiver of any breach of these Terms of Use by you, shall not prevent a subsequent exercise of such right by us or be deemed a waiver by us of any subsequent breach by you of the same or any other term of these Terms of Use. Our rights and remedies under these Terms of Use shall be cumulative, and the exercise of any such right or remedy shall not limit our right to exercise any other right or remedy. NOTICES. Any and all notices to be given by either one of us to the other pursuant to or in connection with these Terms of Use shall be deemed sufficiently given when forwarded by e-mail in each case addressed to you at the e-mail address you have given us or to us at the e-mail address displayed on the Service.

**CONTACT INFORMATION.** Should you have any questions, you may contact us at m.marshall@newcastle.ac.uk.

**EFFECTIVE DATE.** These Terms of Use were last updated on 04 May 2017
      ";
        
        $__internal_d3f624b027adb9b6a427a932115f54daf70ba8206651057da473778e97d1bda6->leave($__internal_d3f624b027adb9b6a427a932115f54daf70ba8206651057da473778e97d1bda6_prof);

        
        $__internal_021795290b2ac0094f17ded636f21a827473a56b2347841ea2bedd52ed0f9f8a->leave($__internal_021795290b2ac0094f17ded636f21a827473a56b2347841ea2bedd52ed0f9f8a_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:landing:toc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 17,  99 => 16,  86 => 91,  84 => 16,  74 => 8,  72 => 7,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle::base.html.twig' %}

{% block title %}Terms of Use{% endblock title %}

{% block body %}

{% include 'AppBundle:landing:navbar.html.twig'  %}
  <div class=\"container\">
    <div class=\"row\">
      <h1 class=\"light center\">Terms of Use</h1>

    </div>

    <div class=\"row\">

      {% filter markdown %}
Please read these terms of use carefully before using the services offered by University of Newcastle Upon Tyne (“Newcastle University”, \"University of Newcastle Upon Tyne\", “we”, “us”). These terms of use set forth the legally binding terms and conditions for your use of the website at https://rosemary-accounts.co.uk (the \"Service\") and the services, features, content, applications or widgets offered by Newcastle University (collectively with the Service, the \"Service\").

**Please read these Terms of Use carefully before using the Service. If you do not accept these Terms of Use, then you may not use the Service. These Terms of Use are subject to change by us at any time, effective when posted on the Service. Your continued use after such notice will constitute acceptance by you of such changes.**

These Terms of Use apply to all users of the Service, including, without limitation, users who are contributors of content, information, and other materials or services on the Service, individual users of the Service, venues that access the Service, and users that have a page on the Service. By using the Service you are agreeing to be bound by these Terms of Use.

**USE OF THE SERVICE**. You may use this Service only subject to these Terms of Use, all applicable laws, rules and regulations and any agreements or terms with third parties to which you are subject. You may not use this Service for commercial purposes, such as to promote a product or service, without our prior written consent. We may impose restrictions on certain features or your access to the Service without notice or liability.

**PROHIBITED USE**. You may not use spiders, robots, data mining techniques or other automated devices or programs to catalog, download or otherwise reproduce, store or distribute content available on the Service. Further, you may not use any such automated means to manipulate the Service or attempt to exceed the limited authorization and access granted to you under these Terms of Use or disrupt the Service or any other user's use of the Service, including, without limitation, via means of overloading, “flooding”, “mailbombing” or “crashing” the Service or circumventing security or user authentication measures. You may not frame portions of the Service within another web site or establish links from any other web site to any page of the Service other than the home page. You may not resell use of, or access to, the Service to any third party.

**CONTENT**. Users may be able to post content in certain areas on the Service, such as in connection with chats, start movement pages, contributions (in design tasks) and in the comments or discussion sections of the Service. You are solely responsible for any content, photos, artwork, videos, text, graphics, articles and other information you upload, post, display or otherwise provide to the Service (“Content”). You represent and warrant that: (i) you own the Content posted by you on the Service or otherwise have the right to grant the license rights granted in these Terms of Use; (ii) your Content does not violate the privacy rights, publicity rights, intellectual property rights, or any other rights of any person; and (iii) the posting of Content on the Service does not result in a breach of any contract between you and a third party.

We do not guarantee the accuracy, completeness or usefulness of any Content. Furthermore, we do not endorse, nor are we responsible for, the accuracy and reliability of any opinion, advice or statement made on the Service by any third party. We assume no responsibility and no obligation to modify or remove any inappropriate Content, and no responsibility for the conduct of the user submitting any such content.

We reserve the right, in our sole discretion, to reject, refuse to post or remove any Content posted by you. We expressly reserve the right to remove or revoke your registration and/or restrict, suspend, or terminate your access to the Service if we determine, in our sole discretion, that you pose a threat to the Service and/or its users.

After posting your Content to the Service, you continue to retain all ownership rights in such Content, and you continue to have the right to use your Content in any way you choose. By supplying Content to any area of the Service, you automatically grant to us for purposes of maintaining the Service, making Content available, and you represent and warrant that you have the right to grant an irrevocable, transferable, sublicenseable, perpetual, non-exclusive, fully paid up, worldwide license to use, copy, perform, reproduce, display, edit, modify and distribute such information and Content and to prepare derivative works of, or incorporate into other works, such Content. Additionally, we shall be free to use any ideas, concepts, know-how or techniques contained in such Content for any purpose whatsoever, including without limitation, developing, manufacturing and marketing products and services which incorporate such Content, including mobile applications that may be created using the Service.

**ONLINE BEHAVIOR**. The Service is a space dedicated to helping charitable organisations become more transparent and accountable. You should not post Content to the Service that is inappropriate for or unrelated to this mission. The following is a partial list of the type of Content that is illegal or prohibited to post on or through the Service. Prohibited Content includes, but is not limited to Content that:

1. is patently offensive and promotes racism, bigotry, hatred or physical harm of any kind against any group or individual;
2. harasses or advocates harassment of another person;
3. exploits people in a sexual or violent manner;
4. contains nudity, violence, or offensive subject matter or contains a link to an adult website;
5. solicits personal information from anyone under the age of 21 years;
6. provides any telephone numbers, street addresses, last names, URLs or email addresses;
7. promotes information that you know is false or misleading or promotes illegal activities or conduct that is abusive, threatening, obscene, defamatory or libelous;
8. promotes an illegal or unauthorized copy of another person's copyrighted work, such as providing pirated computer programs or links to them, providing information to circumvent manufacture-installed copy-protect devices, or providing pirated music or links to pirated music files;
9. involves the transmission of \"junk mail,\" \"chain letters,\" or unsolicited mass mailing, instant messaging, \"spimming,\" or \"spamming\";
10. contains restricted or password only access pages or hidden pages or images (those not linked to or from another accessible page);
11. furthers or promotes any criminal activity or enterprise or provides instructional information about illegal activities including, but not limited to, making or buying illegal weapons, violating someone's privacy, or providing or creating computer viruses;
12. solicits passwords from other users or personal identifying information for commercial or unlawful purposes from other users;
13. involves commercial activities and/or sales without our prior written consent such as contests, sweepstakes, barter, advertising, or pyramid schemes;
14. or includes a photograph or video footage of another person that you have posted without that person's consent or other third party content including but not limited to music, trademarks, logos, artwork or any other copyrighted, trademarked, or proprietary third party content that you have not secured permission to include on the Site

If you wish to report any Content or conduct on the Service that you believe is inappropriate, please contact us at m.marshall@newcastle.ac.uk

**NO CONTENT MONITORING.**
We are under no obligation to screen or monitor Content, but may review Content from time to time at our sole discretion to review compliance with these Terms of Use. We will make all determinations as to what Content is appropriate in our sole discretion. We may include, edit or remove any Content at any time without notice. We may employ automated monitoring devices or techniques to protect our users from mass unsolicited communications (also known as \"spam\") and/or other types of electronic communications that we deem objectionable. Such devices or techniques are not perfect, and we will not be responsible for any legitimate communication that is blocked, or for any unsolicited communication that is not blocked. Mailboxes may have a limited storage capacity. If you exceed the maximum permitted storage space, we may employ automated devices that delete or block email messages that exceed the limit. We will not be responsible for such deleted or blocked messages.

**TERMINATION OF ACCESS.** In addition to any right or remedy that may be available to us under these Terms of Use or applicable law, we may suspend, limit or terminate all or a portion of your access to the Service, at any time with or without notice and with or without cause. In addition, we may refer any information on illegal activities, including your identity, to the proper authorities.

**PRIVACY**. The privacy of your personally identifiable information is very important to us. For more information on what information we collect and how we use such information, please read our Privacy Policy at http://appmovement.com/privacy

**LINKS.** This Service may contain links to other web sites not maintained by us (including without limitation Facebook, Twitter and other social media platforms). We encourage you to be aware when you leave our Service and to read the terms and conditions and privacy statements of each and every web site that you visit. We are not responsible for the practices or the content of such other web sites or services.

The existence of a link between this Service and any other website is not and shall not be understood to be an endorsement by us of the owner or proprietor of the linked internet website, nor an endorsement of us by the owner or proprietor of such linked website.

You agree that we shall not be liable to you or anyone else for any type of loss or damages, regardless of whether based on contract, negligence, intentional wrongdoing, or liability without fault for any costs, losses, or damages (whether direct, indirect, compensatory, special, lost profits, liquidated, consequential, or punitive) arising out of or in any way in connection with your access to or use of any such third party site.

**OUR PROPRIETARY RIGHTS.** We or our licensors are the exclusive owners of all copy, software, graphics, designs and all copyrights, trademarks and other intellectual property or proprietary rights contained on or used in connection with the Service. Except as set forth herein, you agree not to copy, distribute, modify or make derivative works of any materials without the prior written consent of the owner of such materials. All rights not granted under these Terms of Use are reserved by us.

**NO WARRANTIES.** The Service, including all content made available on or accessed through the Service, is provided \"as is\" and we make no representations or warranties of any kind whatsoever for the content made available through the Service. The Service may contain typographical errors and you agree that we shall not be bound by any such errors.

Further, to the fullest extent permissible by law, we disclaim any express or implied warranties, including, without limitation, non-infringement, title, merchantability or fitness for a particular purpose.

We do not warrant that the functions contained in the Service or, materials or content contained therein will be completely secure, uninterrupted or error free, that defects will be corrected, or that the site or the server that makes it available is free of viruses or other harmful components.

We shall not be liable for the use of the Service, including, without limitation, the content and any errors contained therein provided by third parties.

In no event will we be liable under any theory of tort, contract, strict liability or other legal or equitable theory for any direct, indirect, special, incidental, or other consequential damages, lost profits, lost data, lost opportunities, costs of cover, exemplary, punitive, personal injury/wrongful death, each of which is hereby excluded by agreement of the parties regardless of whether or not we have been advised of the possibility of such damages.

**INDEMNITY.** You agree to defend, indemnify and hold harmless us, our business partners and agents, from and against any and all claims, damages, obligations, losses, liabilities, costs or debt, and expenses (including but not limited to attorney's fees) arising from any breach by you of any of these Terms of Use.

**JURISDICTION AND GOVERNING LAW.** English law governs these terms and conditions. You submit to the non-exclusive jurisdiction of the English courts.

**SEVERABILITY.** If any part of these Terms of Use shall be held or declared to be invalid or unenforceable for any reason by any court of competent jurisdiction, such provision shall be ineffective but shall not affect any other part of these Terms of Use.

**WAIVER; REMEDIES.** The failure by us to partially or fully exercise any rights or the waiver of any breach of these Terms of Use by you, shall not prevent a subsequent exercise of such right by us or be deemed a waiver by us of any subsequent breach by you of the same or any other term of these Terms of Use. Our rights and remedies under these Terms of Use shall be cumulative, and the exercise of any such right or remedy shall not limit our right to exercise any other right or remedy. NOTICES. Any and all notices to be given by either one of us to the other pursuant to or in connection with these Terms of Use shall be deemed sufficiently given when forwarded by e-mail in each case addressed to you at the e-mail address you have given us or to us at the e-mail address displayed on the Service.

**CONTACT INFORMATION.** Should you have any questions, you may contact us at m.marshall@newcastle.ac.uk.

**EFFECTIVE DATE.** These Terms of Use were last updated on 04 May 2017
      {% endfilter  %}

    </div>
  </div>
{% endblock body %}
", "AppBundle:landing:toc.html.twig", "/home/marshall/codespace/rosemary-accounts/src/AppBundle/Resources/views/landing/toc.html.twig");
    }
}
