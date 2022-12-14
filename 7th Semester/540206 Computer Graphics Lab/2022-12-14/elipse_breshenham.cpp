#include<windows.h>
#include<math.h>
#include<GL/glut.h>

void myInit()
{
    glClearColor(1.0,1.0,1.0,1.0);
    glColor3f(0.0f,0.0f,0.0f);

    glMatrixMode(GL_PROJECTION);
    glLoadIdentity();
    gluOrtho2D(0.0,640.0,0.0,480.0);
}

void myDisplay()
{
    glClear(GL_COLOR_BUFFER_BIT);
    glPointSize(2.0);

    GLint h=300,k=300,x,x2,y,i=1,a=150,b=25;
    x=0,y=b;


    int aa=a*a,bb=b*b,aa2=aa*2,bb2=bb*2;
    int fx=0,fy=aa2*b;
    int p=bb-aa*b+0.25*aa;


    while(fx<fy)
    {
        glBegin(GL_POINTS);
        {
            glVertex2i(x+h,y+k);
            glVertex2i(-x+h,-y+k);
            glVertex2i(-x+h,y+k);
            glVertex2i(x+h,-y+k);
        }

        glEnd();

        x++;
        fx=fx+bb2;

        if(p<0)
            p=p+fx+bb;
        else
        {
            y--;
            fy=fy-aa2;
            p=p+fx+bb-fy;
        }
    }

    glBegin(GL_POINTS);
    {
        glVertex2i(x+h,y+k);
        glVertex2i(-x+h,-y+k);
        glVertex2i(-x+h,y+k);
        glVertex2i(x+h,-y+k);
    }
    glEnd();

    p=bb*(x+0.5)*(x+0.5)+aa*(y-1)*(y-1)-aa*bb;

    while(y>0)
    {
        y--;
        fy=fy-aa2;
        if(p>=0)
            p=p-fy+aa;
        else
        {
            x++;
            fx=fx+bb2;
            p=p+fx-fy+aa;
        }

        glBegin(GL_POINTS);
        {
            glVertex2i(x+h,y+k);
            glVertex2i(-x+h,-y+k);
            glVertex2i(-x+h,y+k);
            glVertex2i(x+h,-y+k);
        }
        glEnd();


        glFlush();
    }
}

int main(int argc,char** argv)
{
    glutInit(&argc,argv);
    glutInitDisplayMode(GLUT_SINGLE|GLUT_RGB);
    glutInitWindowSize(640,480);
    glutInitWindowPosition(100,150);
    glutCreateWindow("Line draw using line equation\n");
    glutDisplayFunc(myDisplay);
    myInit();
    glutMainLoop();
    return 1;
}
